<?php

include("connection.php");
$worker_id = $_GET['id'];

$sql = "delete from workers where id = '$worker_id'";
$delete = mysqli_query($conn, $sql);

if($delete){
  echo "<script>window.open('./Admin_view.php?del=worker has been deleted','_self')</script>";
}

?>

