<html>
    <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage-Users</title>
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
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            
            th, td {
                border: 1px solid #dddddd;
                padding: 8px;
                text-align: left;
            }
            
            th {
                background-color: #dddddd;
                font-weight: bold;
            }
            
            .user-container {
                margin: 50px;
            }
            
            .user-container h2 {
                text-align: center;
                font-size: 36px;
                margin-bottom: 50px;
            }
            
            .delete-btn {
                background-color: red;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                cursor: pointer;
                float: right;
            }
        </style>
    </head>
    <body>
        <div class="user-container">
            <h2>Manage Users</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>User Type</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Registered At</th>
                    <!-- <th>Phone</th> -->
                    <th>Action</th>
                </tr>
                <?php
                    // Connect to the database
                    $conn = mysqli_connect("localhost", "root", "", "login");
                    
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    // Fetch data from users table
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);
                    
                    // Loop through the result and display the data in table rows
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["full_name"] . "</td>";
                        echo "<td>" . $row["user_type"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["username"] . "</td>";
                         echo "<td>" . $row["password"] . "</td>";
                          echo "<td>" . $row["created_at"] . "</td>";
                        //echo "<td>" . $row["email"] . "</td>";
                        //echo "<td>" . $row["address"] . "</td>";
                        //echo "<td>" . $row["phone"] . "</td>";
                        echo "<td><a href='delete_user.php?id=" . $row["id"] . "' class='delete-btn'>Delete</a></td>";
                        echo "</tr>";
                    }
                    
                    // Close the connection
                    mysqli_close($conn);
                ?>
            </table>
        </div>
    </body>
</html>