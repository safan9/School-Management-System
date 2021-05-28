<?php
	session_start();
	//login.php
	require_once("../db_connection.php");
	
	$email = $_POST["email"];
	$password = $_POST["password"];

	if(empty($email) || empty($password)){
		echo "<b>Please Enter login details</b>";
	}else{
		$sql = "SELECT * FROM student_mst WHERE email='$email' AND password='$password' AND isactive='true'";
		$res = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($res);
		if(mysqli_num_rows($res) == 1 ){
			//set session variables
			$_SESSION["student_id"] = $user["student_id"];
			$_SESSION['student_name'] = $user['fname'];
			
			//redirect to home page
			echo "redirect";
		}else{
			echo "<b>Incorrect Login Details</b>";
		}	
	}
	
	
?>