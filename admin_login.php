<?php

// Set up the database connection
// Set up the database connection
$servername = "localhost";  // replace with your server name
$username = "root";  // replace with your database username
$password = "";  // replace with your database password
$dbname = "login";  // replace with your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the login form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the username and password to check
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Escape the values to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Retrieve the admin user with the specified username
    $sql = "SELECT * FROM admin WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $password_hashed = $row["password"];

        // Verify the password
        if (password_verify($password, $password_hashed)) {
            // Password is correct, start a new session
            session_start();

            // Store the user ID in the session for future use
            $_SESSION["id"] = $row["id"];

            // Redirect to the dashboard or other secure page
            header("Location: admin_dash.php");
        } else {
            // Password is incorrect
             echo "<script>alert('Incorrect username or password. Please try again.');</script>";
        }
    } else {
        // Username does not exist
         echo "<script>alert('Incorrect username or password. Please try again.');</script>";
    }
}

// Close the database connection
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Admin-Login</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/assets/plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="admin/assets/css/adminlte.min.css">
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <!-- /.login-logo -->
         <div class="card card-outline card-warning">
            <div class="card-header text-center">
               <a href="admin_login.php" class="brand-link">
               <img src="admin/assets/img/logo.png" alt="Logo" width="200" style="margin-bottom: -50px;">
               </a>
            </div>



<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
  </div>
  <div class="input-group mb-3">
                        
                        <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-users"></span>
                        </div>
    </div>
</div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Keep me loggedin</label>
  </div>

                     </div>
                  </div>
  <div class="col-6 offset-3">
        <button type="submit" class="btn btn-block" style="background-color: rgb(240, 60, 2);">Login</button>
  </div>
</form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
