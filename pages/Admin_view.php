<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ./login_admin.html");
  // echo"<script>window.open('./admin_login','_self') </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin view</title>
    <link rel="stylesheet" href="../asstes/css/Admin_view_css.css">
</head>
<body>
    <div class="fullbox">
        <div class="innerbox"> <div class="part1"><b> Online Health Care Service </b></div> </div>
    </div>

    <br><br>
    <h3><a href="logout.php">LOG OUT</a></h3>
</body>
</html>