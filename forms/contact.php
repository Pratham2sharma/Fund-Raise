<?php
 
$to = "sumitvani002@gmail.com";
$subject = "Message from Contact Page";
 
// Collect the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
// Compose the message
$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
// Send the email
mail($to, $subject, $body);
 
// Redirect the user back to the contact page

?>