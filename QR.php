<!DOCTYPE html>
<html>
<head>
	<title>Scan & Pay</title>
	<style>
		.image-container {
			position: relative;
			display: inline-block;
			overflow: hidden;
			margin: 20px;
			border-radius: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		}

		.image-container img {
			transition: transform 0.5s;
			display: block;
			width: 100%;
			height: auto;
		}

		.image-container:hover img {
			transform: scale(1.1);
		}

		.image-container::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: rgba(0, 0, 0, 0.5);
			opacity: 0;
			transition: opacity 0.5s;
		}

		.image-container:hover::before {
			opacity: 1;
		}

		.image-container::after {
			content: attr(data-title);
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: #fff;
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			opacity: 0;
			transition: opacity 0.5s;
		}

		.image-container:hover::after {
			opacity: 1;
		}

		.buttons-container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			opacity: 0;
			transition: opacity 0.5s;
		}

		.image-container:hover .buttons-container {
			opacity: 1;
		}

		.button {
			display: inline-block;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			background-color: #2ecc71;
			color: #fff;
			font-size: 18px;
			font-weight: bold;
			margin-right: 10px;
			cursor: pointer;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
			transition: background-color 0.5s;
		}

		.button:hover {
			background-color: #27ae60;
		}

		.button:last-child {
			margin-right: 0;
		}
	</style>
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


.container {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}




.form {
			width: 50%;
			padding: 20px;
			background-color: #f2f2f2;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		
		.form textarea {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: none;
			border-radius: 4px;
			background-color: #fff;
		}

		.form input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		.form input[type="submit"]:hover {
			background-color: #45a049;
		}

  </style>
</head>
<body>



	
</body>	





<br>
<body>
<h1><u><center>PLEASE FILL THE FORM FOR INVESTMENT CONFIRMATION & RECEIVE CERTIFICATE !</u></h1></center> 
<h3>
	 <div class="donate-form">
	<form class="" method="post" action="upload_proof.php" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" name="name" required>
  <label for="email">Email:</label>
  <input type="email" name="email" required>
  <label for="campaign">Startup:</label>


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
echo "
<select name='campaign' required>
 <option selected>Select Campaign...</option>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "
    
     <option required value='" . $row['name'] . "'>" . $row['name'] . "</option required>";
}
echo "</select>";

// Close the database connection
mysqli_close($conn);
?>	

  <label for="amount">Investment Amount:</label>
  <input type="number" name="amount" required>
  <label for="picture">Payment Receipt Sent To Your Email (PNG Format Only) :</label>
  <input type="file" accept=".png" name="picture" required>
  <br>
  <br>
  <!-- <input type="submit" value="Submit"> -->
  <button  class="button" style="font-size: 24px; background-color: #4CAF50; color: white; padding: 16px 32px; border: none; border-radius: 4px;" required>Confirm</button>
</form>
</div>
</div>


			
</body>


</html>




