<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve the form data
  $name = $_POST['name'];
   $email = $_POST['email'];
  $campaign = $_POST['campaign'];
   $amount = $_POST['amount'];
  $picture = $_FILES['picture']['name'];
  
  // Connect to the database
  $conn = new mysqli('localhost', 'root', '', 'login');
  
  // Check if the connection was successful
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Insert the data into the donations_proof table
  $sql = "INSERT INTO investments_proof (name, email, campaign, amount, picture) VALUES ('$name', '$email', '$campaign', '$amount' ,'$picture')";
  
  if ($conn->query($sql) === TRUE) {
    // Move the uploaded file to the uploads directory
   // move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/' . $picture);
    
    // Display a success message
    
    echo "<script>alert('Reports has been Updated!');</script>";
   echo "<script>location.href='admin_dash.php';</script>";
    
  } else {
    // Display an error message
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  // Close the database connection
  $conn->close();
}
?>