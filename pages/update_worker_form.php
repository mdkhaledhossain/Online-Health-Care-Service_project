<?php 


    include("connection.php");
    $full_name = $_POST['full_name'];
    $type = $_POST['type'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $division = $_POST['division'];
    $salary = $_POST['salary'];

$worker_id = $_GET['id'];

    $sql = "update workers set full_name = '$full_name', type = '$type', age = $age, gender = '$gender', phone = '$phone', division = '$division', salary = '$salary' where id ='$worker_id' ";

    $update = mysqli_query($conn, $sql);

    if($update){
        header('Location: '.'Admin_view.php');
        // echo "<script>window.open('./Admin_view.php','_self')</script>";
    }else{
        echo 'try again';
    }


?>