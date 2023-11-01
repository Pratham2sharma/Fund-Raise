<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Investment-Details</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        table.donations {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table.donations th, table.donations td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table.donations th {
            background-color: #4CAF50;
            color: white;
        }

        .filter-form {
            margin: 20px 0;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
        }

        .filter-form label {
            font-weight: bold;
        }

        .filter-form input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .filter-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .filter-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:investconnect@gmail.com">investconnect@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91-9589249171</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://twitter.com/sumitvani002" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.instagram.com/sumitvani002/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/sumit-vani-387880257/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">
        <div class="logo">
            <img src="admin/assets/img/logo.png" alt="Logo" width="100" height="100" style="margin-bottom: -50px;">
            <br>
            <br>
            <h2 class="text-light"><a href="admin_dash.php">InvestConnect</a></h2>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="active" href="admin_dash.php">Home</a></li>
                <li><a href="admin_campaign-list.php">Ideas</a></li>
                <li><a href="#">/</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
<hr>
<h2><center>Investments Details</center></h2>
<br>
<form class="filter-form" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <label for="fromDate">From Date:</label>
                <input type="date" class="form-control" name="fromDate" id="fromDate">
            </div>
            <div class="col-md-3">
                <label for="toDate">To Date:</label>
                <input type="date" class="form-control" name="toDate" id="toDate">
            </div>
            <div class="col-md-3">
              <br>
                <button type="submit" class="btn btn-primary">Apply Filter</button>
            </div>
        </div>
    </div>
</form>
<?php
// MySQL database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Initialize variables for the date range
$fromDate = isset($_POST['fromDate']) ? $_POST['fromDate'] : '';
$toDate = isset($_POST['toDate']) ? $_POST['toDate'] : '';

// Query the donations table with the date range filter
$sql = "SELECT * FROM investments_proof";
if (!empty($fromDate) && !empty($toDate)) {
    $sql = "SELECT * FROM investments_proof WHERE uploaded_at BETWEEN '$fromDate' AND '$toDate'";
}

$result = $mysqli->query($sql);

// Create a table to display the filtered report
echo '<table class="donations">';
echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Startup</th><th>Investment Amount</th><th>Date</th><th>Investment Proof</th><th>Action</th></tr>';

// Loop through the query results and output each row as a table row
while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['campaign'] . '</td>';
    echo '<td>' . $row['amount'] . '</td>';
    echo '<td>' . $row['uploaded_at'] . '</td>';
    echo "<td>
        <form action='view_proof.php' method='post'>
            <input type='hidden' name='id' value='" . $row["id"] . "'>
            <input type='submit' class='btn btn-secondary' value='View Proof'>
        </form>
    </td>";
    echo "<td>
        <form action='delete_donation.php' method='post'>
            <input type='hidden' name='delete_button' value='" . $row["id"] . "'>
            <input type='submit' class='btn btn-primary' value='Delete Details'>
        </form>
    </td>";
    echo '</tr>';
}

echo '</table>';

// Close the database connection
$mysqli->close();
?>
</body>
</html>
