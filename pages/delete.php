<?php

include("connection.php");
$user_id = $_GET['id'];

$sql = "delete from users where id = '$user_id'";
$delete = mysqli_query($conn, $sql);

if($delete){
  echo "<script>window.open('./Admin_view.php?del=user has been deleted','_self')</script>";
}

?>

