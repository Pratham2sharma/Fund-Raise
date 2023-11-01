<?php
// Check if the delete button has been clicked
if (isset($_POST['delete_button'])) {
    
    // Get the ID of the record to be deleted from the button's value attribute
    $id = $_POST['delete_button'];
    
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Delete the record from the table
    $sql = "DELETE FROM investments_proof WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
      header("Location: view_reports.php?message=");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
