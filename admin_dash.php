<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin-Dashboard</title>
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
        /* Add your custom styles here */
        .dashboard {
            background-color: #f5f5f5;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .dashboard h2 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .dashboard .btn-group {
            display: flex;
            align-items: center;
        }

        .dashboard .btn {
            font-size: 18px;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.2s ease-in-out;
            margin-right: 20px;
        }

        .dashboard .btn:hover {
            background-color: #fff;
            color: #333;
            cursor: pointer;
        }

        /* Styling for the hover effect */
        .dashboard .report-options {
            display: none;
            position: horizontal;
            background-color: #333;
            border-radius: 5px;
            padding: 10px;
            right: ;
            top: 100%;
            z-index: 1;
        }

        .dashboard .report-btn:hover .report-options {
            display: block;
        }

        .dashboard .report-options a {
            display: block;
            text-decoration: none;
            color: #fff;
            margin-top: 5px;
        }

        .dashboard .btn:hover .report-options a:hover {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:investconnect@gmail.com">investconnect@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91-9589249171</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://twitter.com/sumitvani002" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.instagram.com/sumitvani002/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/sumit-vani-387880257/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>
    <!-- End Top Bar -->

    <!-- Header -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <img src="admin/assets/img/logo.png" alt="Logo" width="100" height="100" style="margin-bottom: -50px;">
                <br>
                <br>
                <h2 class="text-light"><a href="admin_dash.php">InvestConnect</a></h2>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="admin_dash.php">Home</a></li>
                    <li><a href="admin_campaign-list.php">Ideas</a></li>
                    <li><a href="#">/</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li><a href="#">Welcome, <?php echo $_SESSION['username']; ?></a></li>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <hr>
    <!-- End Header -->

    <!-- Admin Dashboard -->
    <section class="dashboard">
        <h2>Admin Dashboard</h2>
        <div class="btn-group">
            <a href="manage_users.php" class="btn">Manage Users</a>
            <a href="manage_campaigns.php" class="btn">Manage Startup Details</a>
            <a href="add_donation-detail.php" class="btn">Add Investment Details</a>
            <a href="view_reports.php" class="btn">Investment Details</a>
            <div class="btn report-btn">
                View Reports
                <div class="report-options">
                    <a href="current_month.php">Calendar View</a>  <a href="progress.php">Chart View</a>
                   
                </div>
            </div>
            <a href="certificate.php" class="btn">Generate Certificate</a>
            <a href="make_admin.php" class="btn">Make New Admin</a>
        </div>
    </section>
    
    <br>
    <br> 
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 25%;
        }
    </style> 
    <img class="center" src=gg.gif>
    <!-- End Admin Dashboard -->

    <!-- Your other content here -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>
