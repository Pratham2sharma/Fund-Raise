<!DOCTYPE html>
<html>
<head>
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
<body>
    <br>
    <h2><center>Startup-Funding Progress Report</center></h2>
    <br>
    <br>
    
  <title>Investments Reports</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    <style>
    #chart-container {
      width: 800px;
      height: 400px;
      margin: auto;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #chart-container canvas {
      max-width: 100%;
      max-height: 100%;
    }
  </style>
  </style>
</head>
<body>
  <?php
  // Replace DB_HOST, DB_USER, DB_PASSWORD, and DB_NAME with your database credentials
  $mysqli = new mysqli("localhost", "root", "", "login");

  // Check connection
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
  }

  // Query to get the total amount and goal amount for each campaign
  $query = "SELECT c.name as campaign, c.goal, SUM(d.amount) as current_amount 
            FROM startups c 
            LEFT JOIN investments_proof d ON c.name = d.campaign 
            GROUP BY c.name";

  $campaigns = array();
  $currentAmounts = array();
  $goalAmounts = array();

  if ($result = $mysqli->query($query)) {
    // Fetch the data
    while ($row = $result->fetch_assoc()) {
      // Add campaign, current amount, and goal amount to arrays
      array_push($campaigns, $row['campaign']);
      array_push($currentAmounts, $row['current_amount']);
      array_push($goalAmounts, $row['goal']);
    }
    // Free result set
    $result->free();
  }

  // Close connection
  $mysqli->close();
  ?>

  <div id="chart-container">
    <canvas id="bar-chart"></canvas>
  </div>

  <script>
    // Get data from PHP arrays
    var campaigns = <?php echo json_encode($campaigns); ?>;
    var currentAmounts = <?php echo json_encode($currentAmounts); ?>;
    var goalAmounts = <?php echo json_encode($goalAmounts); ?>;

    // Create chart
    var ctx = document.getElementById('bar-chart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: campaigns,
        datasets: [{
          label: 'Current Amount',
          data: currentAmounts,
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }, {
          label: 'Goal Amount',
          data: goalAmounts,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
</body>
</html>
