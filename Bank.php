<!DOCTYPE html>
<html>
<head>
	<title>Bank-Transfer</title>
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
			width: 60%;
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
</head>
<body>
	<div class="image-container" data-title="">
		<img src="bank.jpeg" alt="">
		<div class="buttons-container">
			
		</div>



	</div>
	<br>
	<br>

	<h2>Fill The Form For Donation Confirmation !! </h2>
	<h3>
	<form method="post" action="upload_proof.php" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" name="name" required>
  <label for="email">Email:</label>
  <input type="email" name="email" required>

<label for="campaign">Campaign:</label>


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
$sql = "SELECT name FROM campaigns";
$result = mysqli_query($conn, $sql);

// Create a dropdown list with the campaign names
echo "

 <select name='campaign' required>
  <option selected>Select Campaign...</option required>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";

// Close the database connection
mysqli_close($conn);
?>	



  <label for="amount">Amount:</label>
  <input type="number" name="amount" required>
  <label for="picture">Pay Screenshot (PNG) :</label>
  <input type="file" accept=".png" name="picture" required>
  <br>
  <br>
  <!-- <input type="submit" value="Submit"> -->
  <button  class="button"  style="font-size: 24px; background-color: #4CAF50; color: white; padding: 16px 32px; border: none; border-radius: 4px;" required>Get Certificate</button>
</form>

			
</body>
</html>
