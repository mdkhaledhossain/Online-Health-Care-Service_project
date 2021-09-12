<?php

include("Connection.php");

if(isset($_POST['login'])){

	$admin_email = $_POST['email'];
	$admin_pass  = $_POST['pass'];

	if($admin_email == ''){
		echo "<script>alert('Please enter your email')</script>";
		echo"<script>window.open('./login_admin.html','_self') </script>";
		exit();
	}

	if($admin_pass == ''){
		echo "<script>alert('Please enter the password')</script>";
		echo"<script>window.open('./login_admin.html','_self') </script>";
		exit();
	}

	$check_admin = "select * from admin where email = '$admin_email'   And password = '$admin_pass'";
	$query = mysqli_query($conn, $check_admin);

	if(mysqli_num_rows($query)){
		session_start();
		$_SESSION['email'] = $admin_email;
		echo"<script>window.open('./Admin_view.php','_self') </script>";
	}
	else{
			echo "<script>alert('Your name or password is wrong!!!!')</script>";
			echo"<script>window.open('./login_admin.html','_self') </script>";
			
	}
}
else{
	echo"<script>window.open('./login_admin.html','_self') </script>";
}

?>
