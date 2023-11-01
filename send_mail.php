<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $to = 'sumitvani002@gmail.com';
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the headers
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Your message was sent successfully.';
    } else {
        echo 'There was an error sending your message. Please try again later.';
    }
}
?>