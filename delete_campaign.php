<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM startups WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute() === TRUE) {
        header("Location: manage_campaigns.php?message=");
    } else {
        echo "Error deleting campaign: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();

?>
