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
    <link rel="stylesheet" href="../asstes/css/User_view_css.css">
</head>
<body>
    <div class="fullbox">
        <div class="innerbox"> <div class="part1"><b> Online Health Care Service </b></div> </div>
        <div class="innerbox"> <div class="part2">Welcome to our platform</div> </div>
        <div class="innerbox"> <div class="part3"> We will provide the best medical support</div> </div>
    </div>
    <br><br>

     <!-- tr>td*5
       ul>li*5 -->
       <h3><a href="logout.php">LOG OUT</a></h3>

</body>
</html>