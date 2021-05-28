<?php
	//checking if user already logged in
	session_start();
	if(!isset($_SESSION["student_id"])){
		header("Location:../login.php");
	}
	
	require_once("../db_connection.php");
	//getting value from session & form
	$student_id = $_SESSION['student_id'];
	$new_password = $_POST['password_update'];
	//echo $student_id."<br>".$new_password;
	if(!empty($student_id) && !empty($new_password)){
		$update = "UPDATE student_mst 
				SET `password` =  '$new_password' 
				WHERE `student_id` = '$student_id'";
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