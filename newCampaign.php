<?php

  session_start();
  header('location: index.php');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'crowdfunding');

  $Email = $_POST['Email'];
  $Fullname = $_POST['FullName'];
  $Address = $_POST['Address1'];
  $Address2 = $_POST['Address2'];
  $city = $_POST['City'];
  $state = $_POST['States'];
  $zip = $_POST['Zip']
  $description = $_POST['description'];
  $documents = $_POST['documents'];

   $reg ="INSERT INTO newcampaign(Email, FullName , Address1 , Address2 , City , States , Zip , description1 , documents) VALUES('$Email' , '$Fullname' , '$Address' , '$Address2' , '$city' , '$state' , '$zip' , '$description' ,'$documents')";
   mysqli_query($con, $reg);
   echo "Form Submitted";
  
?>