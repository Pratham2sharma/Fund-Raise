<?php
session_start();

// Assuming you have a database connection established
$conn = mysqli_connect("localhost", "root", "", "login"); // Replace with your actual database details
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in (you can implement user authentication)
if (!isset($_SESSION['username'])) {
    header("location: after_login1.php"); // Redirect to the login page if not logged in
    exit();
}

// Retrieve the name and email of the logged-in user
$username = $_SESSION['username'];
$sql = "SELECT full_name, email FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$full_name = $row['full_name'];
$email = $row['email'];

// Handle form submission
if (isset($_POST['submit'])) {
    $mentor_name = $full_name; // Use the logged-in user's name
    $mentor_email = $email; // Use the logged-in user's email
    $topic = $_POST['topic'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $charges = $_POST['charges'];

    // Connect to the MySQL database
    $conn = mysqli_connect("localhost", "root", "", "login");

    // Insert the campaign data into the database
    $sql = "INSERT INTO mentorship (full_name, email, topic, time, date, charges) VALUES ('$mentor_name', '$mentor_email', '$topic', '$time', '$date', '$charges')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Mentorship session details saved successfully.";
    } else {
        echo "Error saving mentorship session details: " . mysqli_error($conn);
    }

}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provide Mentorship</title>
    <style>
        /* Reset default styles */
body, h1, form, label, input, select, option {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    font-family: Arial, sans-serif;
}

/* Global styles */
body {
    background-color: #f4f4f4;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    text-align: center;
}

h1 {
    color: #333;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 18px;
}

input[type="text"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

select {
    appearance: none;
    background-color: #fff;
    background-image: url("arrow-down.png");
    background-repeat: no-repeat;
    background-position: right center;
    padding-right: 40px;
}

input[type="submit"] {
    width: 50%;
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Responsive styles */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
    h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    label {
        font-size: 16px;
    }
    input[type="text"],
    select {
        font-size: 14px;
    }
    input[type="submit"] {
        width: 70%;
    }
}

    </style>
</head>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About</title>
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


<style>
     
            .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:sumitvani002@gmail.com">investconnect@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 9589249171</span></i>
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
         <h2 class="text-light"><a href="after_login1.php">InvestConnect</a></h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="after_login1.php">Home</a></li>
          <li><a  href="about3.html">About</a></li>
          <li><a href="contact3.html">Contact</a></li>
          <li><a href="campaign-list2.php">Ideas</a></li>
          <li><a href="connect_founders.php">Connect</a></li>
          <li><a class="active" href="provide_mentorship.php">Mentorship</a></li>
            <li><a href="#">/</a></li>
          <li><a href="logout.php">Logout</a></li>
         
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <body>
  <br>
    <div class="container">
        <h1>Provide Mentorship</h1>
        <br>
        <form method="post">
            <label for="mentor">Your Name:</label>
            <input type="text" id="mentor" name="mentor" value="<?php echo $full_name; ?>" disabled><br>

            <label for="mentor_email">Your Email:</label>
            <input type="text" id="mentor_email" name="mentor_email" value="<?php echo $email; ?>" disabled><br>

            <label for="topic">Topic:</label>
            <input type="text" id="topic" name="topic" required><br>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required><br>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br>

            <label for="charges">Charges (₹):</label>
            <input type="number" id="charges" name="charges" required><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>

</html>
