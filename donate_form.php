<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CrowdFunding</title>
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
            .fundraiser-section {
                background-color: #f2f2f2;
                padding: 50px;
                text-align: center;
            }

            .fundraiser-section h2 {
                font-size: 36px;
                font-weight: bold;
                color: #333;
                margin-bottom: 20px;
            }

            .fundraiser-section p {
                font-size: 18px;
                color: #333;
                line-height: 1.5;
                margin-bottom: 20px;
            }

            .fundraiser-section a {
                font-size: 18px;
                background-color: #333;
                color: #fff;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                transition: all 0.2s ease-in-out;
            }

            .fundraiser-section a:hover {
                background-color: #fff;
                color: #333;
                cursor: pointer;
            }
        </style>


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91-97867867565</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
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
        
        <h1 class="text-light"><a href="index.html">CrowdFunding</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="after_login.php">Home</a></li>
          <li><a href="about2.html">About</a></li>
          <li><a href="contact2.html">Contact</a></li>
          <li><a href="campaign-list1.php">List of Campaign</a></li>
          <li><a href="campaign.php">Add Your Campaign</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="#">/</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<!DOCTYPE html>
<html>
<head>

  <title>Donate</title>
  <style>
    .donate-form {
  max-width: 500px;
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
</head>
<body>


  <div class="donate-form">
    <h1>Donate</h1>
    <form class="donate-form" method="post" action="donations.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="username" id="name" required>
  </div>
  <div class="form-group">
    <label for="campaign">Campaign</label>
    <input type="text" name="campaign" id="campaign" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" required>
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="number" name="amount" id="amount" required>
  </div>
  <button type="submit">Donate</button>
</form>

  </div>
</body>
</html>
