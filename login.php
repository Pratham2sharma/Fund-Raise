<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("location: after_login.php");
    exit;
}

require_once "config.php";

$username = $password = "";
$err = "";

// If the request method is POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

    if (empty($err)) {
        $sql = "SELECT id, username, password, user_type FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;

        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $user_type);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // This means the password is correct. Allow the user to login
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        // Redirect user based on user_type
                        if ($user_type === 'Founder') {
                            header("location: after_login.php");
                        } elseif ($user_type === 'Investor') {
                            header("location: after_login1.php");
                        } else {
                            echo "<script>alert('Invalid user type. Please contact support.');</script>";
                        }
                    } else {
                        echo "<script>alert('Incorrect username or password. Please try again.');</script>";
                    }
                }
            }
        }
    }
}

$display_errors = ini_get('display_errors'); // Get the initial value ini_set('display_errors', 0);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    
    
                    <form action="" method="post">
                        <input type="text" class="input-box" name="username" placeholder="Your Username">
                        <input type="password" class="input-box" name="password" placeholder="Your password" required>
                        <button type="submit" class="submit-btn">Submit</button>
                        <input style="text-align:center" type="checkbox" ><span style="text-align:center">Remember Me</span>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">I'm New Here</button>
                    <a href="admin_login.php">Admin Login</a>
                </div>
                <div class="card-back">
                    <h2>REGISTER HERE</h2>
                    <form action="register.php" method="post">
                    <input type="text" class="input-box" name="full_name" placeholder="Full Name" required>
                    <select id="inputState" class="input-box" name="user_type" required>
                    <option  value="0">Select User Type</option>
        <option value="Investor">Investor</option>
        <option  value="Founder">Founder</option>
        <input type="email" class="input-box" placeholder="Email" name="email" required>
                        <input type="text" class="input-box" name="username" placeholder="Username" required>
                        <input type="password" class="input-box" name="password" placeholder="Password" required>
                        <input type="password" class="input-box" name="confirm_password" placeholder="Confirm password" required>
                        <input type="checkbox" style="text-align:center"><span required> Yes! All Details Are Correct</span>
                        <button type="submit" class="submit-btn" onclick="user_register()">Submit</button>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">I've An Account</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var card = document.getElementById("card");
        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
    </script>
</body>
</html>