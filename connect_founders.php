
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("location: login.php"); // Redirect to the login page if not logged in
    exit();
}

// Database connection
$conn = mysqli_connect("localhost", "root", "", "login"); // Replace with your actual database details

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve a list of founders from the database
$sqlFounders = "SELECT username, full_name FROM users WHERE user_type = 'founder'";
$resultFounders = mysqli_query($conn, $sqlFounders);

$founders = array();
while ($row = mysqli_fetch_assoc($resultFounders)) {
    $founders[] = $row;
}

// Retrieve startup details from the database, including founder_social
$sqlStartups = "SELECT name, description, picture, founder_social FROM startups";
$resultStartups = mysqli_query($conn, $sqlStartups);

$startups = array();
while ($row = mysqli_fetch_assoc($resultStartups)) {
    $startups[] = $row;
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect with Founders</title>
    <style>
        /* Reset default styles */
        body, h2, table, th, td, a, img {
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            font-family: Arial, sans-serif;
        }

        /* Global styles */
        body {
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px; /* Reduced font size */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
            font-size: 16px; /* Reduced font size */
        }

        th {
            background-color: #f0f0f0;
        }

        img.logo {
            max-width: 50px;
            max-height: 50px;
            border-radius: 5px;
        }

        a.connect-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            display: inline-block;
            font-size: 14px; /* Reduced font size */
        }

        a.connect-button:hover {
            background-color: #0056b3;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #007bff;
            padding: 10px 0;
        }

        .navbar-title {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h2 class="navbar-title"><a href="after_login1.php">Go Back to Home Page</a></h2>
        </div>
        <br>
        

        <h2>Connect with Founders</h2>

        <table>
            <tr>
                <th>Founder Name</th>
                <th>Startup Name</th>
                <th>Description</th>
                <th>Startup Logo</th>
                <th>Connect</th>
            </tr>
            <?php foreach ($founders as $index => $founder) { ?>
                <tr>
                    <td><?php echo $founder['full_name']; ?></td>
                    <td><?php echo $startups[$index]['name']; ?></td>
                    <td><?php echo $startups[$index]['description']; ?></td>
                    <td><img src="<?php echo $startups[$index]['picture']; ?>" alt="Startup Logo" class="logo"></td>
                    <td>
                        <a href="<?php echo $startups[$index]['founder_social']; ?>" target="_blank" class="connect-button">Connect</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>



