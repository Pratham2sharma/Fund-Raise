<?php
session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
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
        
        <h2 class="text-light"><a href="after_login.php">InvestConnect</a></h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="after_login.php">Home</a></li>
          <li><a href="about2.html">About</a></li>
          <li><a href="contact2.html">Contact</a></li>
          <li><a href="campaign-list1.php">Ideas</a></li>
          <li><a href="campaign.php">Add Your Startup</a></li>
          <li><a href="get_mentorship.php">Mentorship</a></li>
            <li><a href="#">/</a></li>
          <li><a href="logout.php">Logout</a></li>
        
          
          <?php


// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // Assuming you have a database connection already established
    $conn = mysqli_connect("localhost", "root", "", "login"); // Replace with your database details
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_SESSION['username'];

    // Retrieve user_type from the database
    $sql = "SELECT user_type FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $user_type);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($conn);
    ?>
    <li><a href="#"><b><i>Welcome, <?php echo $username . ' - ' . $user_type; ?></i></b></a></li>
<?php
}
?>
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<br>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(admin/assets/img/2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <h3>Raise, Invest & Connect<span></span></h3>
            <h1>Let's Grow Together..</h1>
              <div class="text-center"><a href="campaign-list1.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(admin/assets/img/1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <h3>Invest, Raise & <span>Connect</span></h3>
              <p></p>
              <div class="text-center"><a href="campaign-list1.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <hr>

  <main id="main">

    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
           <h4><i>InvestConnect is a great way to make connections. Whether it's for Raising or to make investments for growth. By participating in our platform, you not only support startups as investors, but you also get to know about new ideas. Whether it's through Founders or Connections..</i></h4>
            <p> </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="campaign.php">Raise Now</a>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <!-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-right">
              <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                <center>
                  <img src="admin/assets/img/3.jpg" width="380"/></center>
              </div>
              <h2 style="color:rgb(43, 35, 32);">Feeding the Poors</h2>
              <div class="float-left">
                <p><strong>Raised:</strong><small class="text-success"> RS.5,000.00</small></p>
                <p><strong>Goal:</strong><small class="text-danger"> RS.50,000.00</small></p>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Donate Now</a>
                <br>
                <a href="#" class="btn-buy">View Documents</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-right">
              <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                <center>
                  <img src="admin/assets/img/1.jpg" width="380"/></center>
              </div>
              <h2 style="color:rgb(43, 35, 32);">Come forward to help Disabled People</h2>
              
              <div class="float-left">
                <p><strong>Raised:</strong><small class="text-success"> RS.9,000.00</small></p>
                <p><strong>Goal:</strong><small class="text-danger"> RS.90,000.00</small></p>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Donate Now</a>
                <br>
                <a href="#" class="btn-buy">View Documents</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-right">
              <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                <center>
                  <img src="admin/assets/img/2.jpg" width="380"/></center>
              </div>
              <h2 style="color:rgb(43, 35, 32);">Helping Orphanages</h2>
              
              <div class="float-left">
                <p><strong>Raised:</strong><small class="text-success"> RS.10,000.00</small></p>
                <p><strong>Goal:</strong><small class="text-danger"> RS.100,000.00</small></p>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Donate Now</a>
                <br>
                <a href="#" class="btn-buy">View Documents</a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section> -->



  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<?php 
include 'footer2.html';

?>
</html>


