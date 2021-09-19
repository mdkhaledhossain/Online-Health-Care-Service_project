<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ./login.html");
  // echo"<script>window.open('../index.php','_self') </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
    <link rel="stylesheet" href="../asstes/css/user_view_css.css">
</head>
<body>
    <div class="fullbox">
        <div class="innerbox"> <div class="part1"><b> Online Health Care Service </b></div> </div>
        <div class="innerbox"> <div class="part2">Welcome to our platform</div> </div>
        <div class="innerbox"> <div class="part3"> We will provide the best medical support</div> </div>
    </div>
    <br><hr><hr>


     <!-- tr>td*5
       ul>li*5 -->
       <center>

<div class="outer_box1">
    <div class="inner_box2">
        <!-- Here you can find.  -->
        Click Here!! And View Our SERVICES
    </div>
    <div class="inner_box1">
       <a href="./User_view_nurse.php" class="link">Private Nurse Service</a> 
    </div>
    <div class="inner_box1">
       <a href="./User_view_oxygen.php" class="link">Oxygen Service</a> 
    </div>
    <div class="inner_box1">
       <a href="./user_view_blood.php" class="link">Emergency Blood Service</a> 
    </div>
    <div class="inner_box1">
       <a href="user_view_doctor.php" class="link">Doctor Info</a> 
    </div>  
</div>
</center>

     
      <center><a href="logout.php" class="button_1">LOG OUT</a></center>

</body>
</html>