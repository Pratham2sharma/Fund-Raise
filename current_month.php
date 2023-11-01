<?php
// Database connection configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create a database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the selected month and year from the form
$selectedMonth = isset($_POST['month']) ? $_POST['month'] : date('n');
$selectedYear = isset($_POST['year']) ? $_POST['year'] : date('Y');

// Get the current month and year
$month = date('n');
$year = date('Y');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedMonth = $_POST['month'];
    $selectedYear = $_POST['year'];
}

// Get the first day of the selected month
$firstDay = mktime(0, 0, 0, $selectedMonth, 1, $selectedYear);

// Get the number of days in the selected month
$daysInMonth = date('t', $firstDay);

// Get the name of the selected month
$monthName = date('F', $firstDay);

// Get the day of the week for the first day of the selected month
$dayOfWeek = date('w', $firstDay);

// Create an array to store the names of the days of the week
$daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

// Query to fetch investments for the selected month based on uploaded_at
$sql = "SELECT DAY(uploaded_at) AS day, name, campaign, amount, DATE_FORMAT(uploaded_at, '%Y-%m-%d') AS uploaded_at FROM investments_proof WHERE MONTH(uploaded_at) = $selectedMonth AND YEAR(uploaded_at) = $selectedYear";
$result = $mysqli->query($sql);

// Create an associative array to store investments for each day
$investmentData = [];
while ($row = $result->fetch_assoc()) {
    $day = (int)$row['day'];
    $investmentData[$day][] = [
        'name' => $row['name'],
        'campaign' => $row['campaign'],
        'amount' => $row['amount'],
        'uploaded_at' => $row['uploaded_at'],
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Investment Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        h1 {
            background-color: #ffc107;
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        .highlight {
            background-color: #ffc107;
            width: 20px; /* Reduced width */
            cursor: pointer;
        }
        .highlight-details {
            display: none;
            position: absolute;
            z-index: 1;
            background-color: #fff;
            border: 1px solid #ccc;
            width: auto;
            max-width: 200px; /* Adjust max-width as needed */
            padding: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        }
        .highlight:hover .highlight-details {
            display: block;
        }
    </style>
</head>

<body>
    <br>
    <a href="admin_dash.php">Admin DashBoard</a>
    <h1><?php echo $monthName, ' ', $selectedYear; ?></h1>
    <form method="POST">
        <label for="month">Select Month:</label>
        <select name="month" id="month">
            <?php
            for ($m = 1; $m <= 12; $m++) {
                $selected = ($m == $selectedMonth) ? 'selected' : '';
                echo "<option value='$m' $selected>" . date("F", mktime(0, 0, 0, $m, 1)) . "</option>";
            }
            ?>
        </select>
        <label for="year">Select Year:</label>
        <select name="year" id="year">
            <?php
            $currentYear = date('Y');
            for ($i = $currentYear; $i >= 2000; $i--) {
                $selected = ($i == $selectedYear) ? 'selected' : '';
                echo "<option value='$i' $selected>$i</option>";
            }
            ?>
        </select>
        <button type="submit">Change</button>
    </form>
    <table>
        <tr>
            <?php
            foreach ($daysOfWeek as $day) {
                echo '<th>', $day, '</th>';
            }
            ?>
        </tr>
        <tr>
            <?php
            // Output empty cells for days before the first day of the month
            for ($i = 0; $i < $dayOfWeek; $i++) {
                echo '<td></td>';
            }

            // Output the days of the month
            for ($day = 1; $day <= $daysInMonth; $day++) {
                $class = in_array($day, array_keys($investmentData)) ? 'highlight' : '';

                echo '<td class="' . $class . '">', $day;

                // Output investment details for this day
                if (isset($investmentData[$day])) {
                    echo '<div class="highlight-details">';
                    foreach ($investmentData[$day] as $investment) {
                        echo '<p>','<br> Investor : ', $investment['name'], '<br> Startup : ', $investment['campaign'], '<br> Invested Amt - RS.', $investment['amount'], '<br> Investment Date: ', $investment['uploaded_at'], '</p>';
                    }
                    echo '</div>';
                }

                echo '</td>';

                // Start a new row for the next week
                if (($day + $dayOfWeek) % 7 == 0) {
                    echo '</tr><tr>';
                }
            }

            // Output empty cells for the remaining days of the last week
            $remainingDays = (7 - ($dayOfWeek + $daysInMonth) % 7) % 7;
            for ($i = 0; $i < $remainingDays; $i++) {
                echo '<td></td>';
            }
            ?>
        </tr>
    </table>
</body>
</html>

<?php
// Close the database connection
$mysqli->close();
?>
