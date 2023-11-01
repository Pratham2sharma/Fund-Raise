<?php
// Connect to the database
$host = 'localhost';
$dbname = 'login';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Check if the button has been clicked
// if(isset($_POST['submit'])) {
    // Get the campaign ID from the form
    $campaign_id = $_POST['id'];

    // Retrieve the document from the database
    $stmt = $pdo->prepare("SELECT picture FROM investments_proof WHERE id = ?");
    $stmt->execute([$campaign_id]);
    $row = $stmt->fetch();
    $document = $row['picture'];

    // Output the document to the browser
    echo '<img src="' . $document . '" style="text-align: center;  display: block;
  margin: auto; max-width: 100%;
  height: 80%;">';

?>

