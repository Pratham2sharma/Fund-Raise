<?php
session_start();

// Include PHPMailer library for sending emails
require 'PHPMailer/PHPMailerAutoload.php';

// Database connection
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email exists in the users table
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        // Generate a random OTP
        $otp = sprintf("%06d", mt_rand(1, 999999));

        // Set OTP expiration (e.g., 10 minutes from now)
        $expiry_time = date('Y-m-d H:i:s', strtotime('+10 minutes'));

        // Generate a unique token (e.g., UUID)
        $token = uniqid();

        // Insert OTP request into password_reset table
        $sql = "INSERT INTO password_reset (email, token, otp, expiry_time) VALUES ('$email', '$token', '$otp', '$expiry_time')";
        $insertResult = mysqli_query($conn, $sql);

        if ($insertResult) {
            // Send the OTP to the user's email
            $mail = new PHPMailer;

            // SMTP configuration (configure these settings)
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your_email@example.com';
            $mail->Password = 'your_email_password';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Sender and recipient email addresses
            $mail->setFrom('your_email@example.com', 'Your Name');
            $mail->addAddress($email);

            // Email subject and body
            $mail->Subject = 'Password Reset OTP';
            $mail->Body = "Your OTP for password reset is: $otp";

            // Send the email
            if ($mail->send()) {
                header("location: verify_otp.php?token=$token"); // Redirect to OTP verification page
            } else {
                $error = "Email could not be sent. Please try again later.";
            }
        } else {
            $error = "Error generating OTP. Please try again.";
        }
    } else {
        $error = "Email not found. Please enter a valid email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your head content -->
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form method="post">
            <div class="form-group">
                <label for="email">Enter your email:</label>
                <input type="email" name="email" required>
            </div>
            <button type="submit">Send OTP</button>
        </form>
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
    </div>
</body>
</html>
