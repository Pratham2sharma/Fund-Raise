<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the donation details from the form
$username = $_POST['username'];
$campaign = $_POST['campaign'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];

// Insert the donation data into the database
$sql = "INSERT INTO donations (username, campaign, email, phone, amount)
        VALUES ('$username', '$campaign', '$email' , '$phone' ,'$amount')";

if (mysqli_query($conn, $sql)) {
   header("Location: pay.php?message=");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
