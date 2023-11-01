<!-- success.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <style>
    .success {
      background-color: #dff0d8;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="success">
    <h1>Success!</h1>
    <p>Thank you, <?php echo $name; ?>, for your donation of $<?php echo $amount; ?>.</p>
  </div>
</body>
</html>