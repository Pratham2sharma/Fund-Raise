<?php

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

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the username and password to insert
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password using bcrypt
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

    // Escape the values to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password_hashed = mysqli_real_escape_string($conn, $password_hashed);

    // Construct and execute the SQL query
    $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password_hashed')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New Admin Created Successfully !');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);

?>


<html>
<head>
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Make-Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:sumitvani002@gmail.com">investconnect@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91-9589249171</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/sumitvani002" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.instagram.com/sumitvani002/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/sumit-vani-387880257/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <img src="admin/assets/img/logo.png" alt="Logo" width="100" height="100" style="margin-bottom: -50px;">
        <br>
        <br>
        
        <h2 class="text-light"><a href="admin_dash.php">InvestConnect</a></h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

     <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="admin_dash.php">Home</a></li>
          
          <li><a href="admin_campaign-list.php">Ideas</a></li>
            <li><a href="#">/</a></li>
          <li><a href="logout.php">Logout</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<hr>
  <br>
  <br>
<style>
.form-container {
  max-width: 500px;
  margin: 0 auto;
  background-color: #f7f7f7;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-container h2 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 10px;
}

.form-group label {
  display: block;
  font-size: 18px;
  margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.form-group button[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
}

.form-group button[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>
<body>
    <div class="form-container">
  <h2>Create New Admin User</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text"  name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password"  name="password" required>
    </div>
    <br>
    <div class="form-group">
      <button type="submit">Create User</button>
    </div>
  </form>
</div>

</body>
