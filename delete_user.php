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

// Get the user ID to delete
$user_id = (int) $_GET['id'];

// Delete the user from the database
$sql = "DELETE FROM users WHERE id = $user_id";

if (mysqli_query($conn, $sql)) {
    header("Location: manage_users.php?message=User+deleted+successfully");
} else {
    header("Location: index.php?message=Error+deleting+user:+".mysqli_error($conn));
}

// Close the database connection
mysqli_close($conn);

?>
