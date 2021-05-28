<?php
	//checking if user already logged in
	session_start();
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	
	require_once("../db_connection.php");
	//getting value from session & form
	$staff_id = $_SESSION['staff_id'];
	$new_password = $_POST['password_update'];
	//echo $staff_id."<br>".$new_password;
	if(!empty($staff_id) && !empty($new_password)){
		$update = "UPDATE staff_mst 
				SET `password` =  '$new_password' 
				WHERE `staff_id` = '$staff_id'";
		$result = mysqli_query($conn, $update);

		if($result){
			echo "success";
		}else{
			echo "something went wrong";
		}
	}else{
		echo "All Fields Are Required!";
	}
	




?>