<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token exists in the password_reset table
    $sql = "SELECT * FROM password_reset WHERE token = '$token' AND expiry_time >= NOW()";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newPassword = $_POST['new_password'];

            // Hash the new password before updating
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // Update the user's password in the users table
            $sql = "UPDATE users SET password = '$hashedPassword' WHERE email = '$email'";
            $updateResult = mysqli_query($conn, $sql);

            if ($updateResult) {
                // Delete the OTP request from password_reset table
                $sql = "DELETE FROM password_reset WHERE token = '$token'";
                mysqli_query($conn, $sql);

                header("location: login.php"); // Redirect to the login page after password reset
            } else {
                $error = "Error resetting password. Please try again.";
            }
        }
    } else {
        // Token is invalid or expired
        header("location: forgot_password.php"); // Redirect to the "Forgot Password" page
    }
} else {
    header("location: forgot_password.php"); // Redirect to the "Forgot Password" page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your head content -->
</head>
<body>
    <div class="container">
        <h2>Verify OTP and Reset Password</h2>
        <form method="post">
            <div class="form-group">
                <label for="new_password">Enter your new password:</label>
                <input type="password" name="new_password" required>
            </div>
            <button type="submit">Reset Password</button>
        </form>
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
    </div>
</body>
</html>
