<?php 
session_start();
if(!isset($_SESSION['email'])){

    header("Location: ./login_admin.html");
}


include("connection.php");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$post_code = $_POST['post_code'];
$district = $_POST['district'];
$street = $_POST['street'];
$user_id = $_GET['id'];

$sql = "update users set first_name = '$first_name', last_name = '$last_name', age = $age, phone = '$phone', email = '$email', password = '$password', post_code = '$post_code', district = '$district' , street = '$street' where id ='$user_id' ";

$update = mysqli_query($conn, $sql);

if($update){
    header('Location: '.'Admin_view.php');
    // echo "<script>window.open('./Admin_view.php','_self')</script>";
}else{
    echo 'try again';
}


?>