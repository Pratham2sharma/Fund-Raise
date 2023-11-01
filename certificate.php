<?php
// Your database connection code goes here
// ...

if (isset($_POST['submit'])) {
  $donor_name = $_POST['donor_name'];
  $campaign = $_POST['campaign'];
  $donation_date = $_POST['donation_date'];
  $amount = $_POST['amount'];
  
  // Generate certificate HTML code
  $certificate_html = "<!DOCTYPE html>
  <html>
  <head>

    <title>Certificate of Donation</title>
    <style>
      /* Advanced CSS styles for the certificate */
                .certificate {
                    font-family: 'Arial';
                    text-align: center;
                    background-color: #f2f2f2;
                    padding: 20px;
                    border: 2px solid #ccc;
                }
                
                .title {
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 20px;
                }
                
                .donor-name {
                    font-size: 20px;
                    margin-bottom: 20px;
                }
            </style>
    </style>
  </head>
  <body>
    <div class='certificate'>
      <h1>Certificate of Investment</h1>
      <p>This certificate is presented to:</p>
      <h2>$donor_name</h2>
      <p>in recognition of their investment of:</p>
      <h3> Rs. $amount</h3>
      <p>to the $campaign startup</p>
      <p>on $donation_date</p>
    </div>
  </body>
  </html>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Generate Certificate of Donation</title>
  <style>
    /* Advanced CSS styles for the certificate */
                .certificate {
                    font-family: 'Arial';
                    text-align: center;
                    background-color: #f2f2f2;
                    padding: 20px;
                    border: 2px solid #ccc;
                }
                
                .title {
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 20px;
                }
                
                .donor-name {
                    font-size: 20px;
                    margin-bottom: 20px;
                }
  </style>
  <style>
    .donate-form {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border-radius: 5px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="number"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #eee;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  border: none;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #2E8B57;
}

  </style>
  


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
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:sumitvani002@gmail.com">fundme@gmail.com</a></i>
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
<body>
    <br>
    <br>
<div class="donate-form">
    <h1><center>Generate Certificate</center></h1>
    <form class="donate-form" method="post">
  <div class="form-group">
    <label for="name">Investor Name</label>
   <input type="text" id="donor_name" name="donor_name" required><br>
  </div>
  <div class="form-group">
    <label for="campaign">Startup</label>
    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the campaign names from the database
$sql = "SELECT name FROM startups";
$result = mysqli_query($conn, $sql);

// Create a dropdown list with the campaign names
echo "<select name='campaign' required >
 <option selected>Select Startup...</option required>"; 
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option> required";
}
echo "</select>";

// Close the database connection
mysqli_close($conn);
?>	
  </div>
  <div class="form-group">
    <label for="email">Investment Date</label>
   <input type="date" id="donation_date" name="donation_date" required><br>
  </div>
  <div class="form-group">
    <label for="phone">Investment Amount</label>
    <input type="number" id="amount" name="amount" required><br>
  </div>
  <button type="submit" name="submit">Generate Certificate</button>
</form>


  <?php
  // Output certificate HTML code if the form was submitted
  if (isset($certificate_html)) {
    echo $certificate_html;
  }
  ?>
</body>
</html>