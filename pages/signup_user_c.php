<?php
include("Connection.php");

// here we checek registration

if(isset($_POST['register'])){
	$user_f_name         = $_POST['f_name'];
	$user_l_name         = $_POST['l_name'];
	$user_pass           = $_POST['pass'];
    $user_email          = $_POST['email'];
    $user_phone          = $_POST['phone'];
    $user_age            = $_POST['age'];
    $user_post_code      = $_POST['post_code'];
    $user_district       = $_POST['dist'];
    $user_street         = $_POST['street'];
    

	// echo"$user_email";

	if($user_l_name == ''){
		echo "<script>alert('Please enter your last name')</script>";
		echo"<script>window.open('./signup.html','_self') </script>";
		exit();
	}
    
    if($user_pass == ''){
		echo "<script>alert('Please enter the password')</script>";
		echo"<script>window.open('./signup.html','_self') </script>";
		exit();
	}

	if($user_email == ''){
		echo "<script>alert('Please enter the email')</script>";
		echo"<script>window.open('./signup.html','_self') </script>";
		exit();
	}

    if($user_district == ''){
		echo "<script>alert('Please enter the district')</script>";
		echo"<script>window.open('./signup.html','_self') </script>";
		exit();
	}

    if($user_street == ''){
		echo "<script>alert('Please enter the street')</script>";
		echo"<script>window.open('./signup.html','_self') </script>";
		exit();
	}

	
    // echo 'Hello';


	$check_email_query =  "select * from users where email = '$user_email'";
	$run_query =  mysqli_query($conn, $check_email_query);

	if(mysqli_num_rows($run_query) > 0){

		echo "<script>alert('Email $user_email already exist in our database, please try another one!!')</script>";
		echo"<script>window.open('./signup.html','_self') </script>";
		exit();
	}
         

	$insert_user = "insert into users ( first_name,last_name,age,phone,email,password,post_code,district,street) 
	value ('$user_f_name','$user_l_name',$user_age,'$user_phone','$user_email','$user_pass','$user_post_code','$user_district','$user_street')";

	 if(mysqli_query($conn, $insert_user)){
	 	echo "<script>alert('Your registration is complete successfully!!!!!')</script>";
	 	echo"<script>window.open('./login.html','_self') </script>";

	 }
	
}

else{
	echo"<script>window.open('./signup.html','_self') </script>";
}
?>