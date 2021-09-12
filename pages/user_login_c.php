<?php

include("Connection.php");

if(isset($_POST['login'])){

	$user_email = $_POST['email'];
	$user_pass  = $_POST['pass'];

	if($user_email == ''){
		echo "<script>alert('Please enter the email')</script>";
		echo"<script>window.open('./login.html','_self') </script>";
		exit();
	}

	if($user_pass == ''){
		echo "<script>alert('Please enter the password')</script>";
		echo"<script>window.open('./login.html','_self') </script>";
		exit();
	}

	$check_user = "select * from users where email = '$user_email'   And password= '$user_pass'";
	$query = mysqli_query($conn, $check_user);

	if(mysqli_num_rows($query)){
		session_start();
		$_SESSION['email'] = $user_email;
		echo"<script>window.open('./User_view.php','_self') </script>";
	}
	else{
			echo "<script>alert('Your email or password is wrong!!!!')</script>";
			echo"<script>window.open('./login.html','_self') </script>";
			
	}
}
else{
	echo"<script>window.open('./login.html','_self') </script>";
}

?>
