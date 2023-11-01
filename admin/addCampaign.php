<?php

  session_start();
  header('location: index.php');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'crowdfunding');

  $category = $_POST['Category'];
  $CampaignName = $_POST['CampaignName'];
  $description = $_POST['Description2'];
  $TrgAmount = $_POST['TargetAmount'];
  $Deadline = $_POST['Deadline'];
  $banner = $_POST['Banner'];


   $reg ="INSERT INTO newcampaign(Category, CampaignName , Description2 , TargetAmount , Deadline , Banner ) VALUES('$category' , '$CampaignName' , '$Address' , '$description' , '$TrgAmount' , '$Deadline' , '$banner')";
   mysqli_query($con, $reg);
   echo "Form Submitted";
  
?>