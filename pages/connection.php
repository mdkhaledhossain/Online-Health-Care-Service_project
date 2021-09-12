<?php
	
	$db_server = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "health_care_service";  

	$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
	if(!$conn){

		die("Connecton Failed !!: ".mysqli_connect_error());
	} 

	// else{
	// 	echo "connection successful";
	// }

?>