<!-- donate.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $amount = $_POST['amount'];

  // Add the payment integration code here to process the payment


  // Redirect to the success page
  header('Location: pay.php');
  exit;
}
?>