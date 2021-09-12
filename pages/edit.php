<?php

include("connection.php");
$user_id = $_GET['id'];
$sql = "select *from users where id = '$user_id'";
$get_user = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($get_user);

// echo $row['id'];
// echo $row['user_name'];
// echo $row['user_email'];
// echo $row['user_pass'];

?>



