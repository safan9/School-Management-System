<?php
	//checking if user already logged in
	session_start();
	if(!isset($_SESSION["student_id"])){
		header("Location:../login.php");
	}
	
	require_once("../db_connection.php");
	//getting value from session.
	$student_id = $_SESSION['student_id'];

	$password = mysql_real_escape_string($_POST['password']);

	$sql = "SELECT * FROM `student_mst`
			WHERE student_id = $student_id";
	$res = mysqli_query($conn, $sql);

	if(mysqli_num_rows($res) > 0){
		$student = mysqli_fetch_assoc($res);

		if($student['password'] == $password){
			echo "ok";
		}else{
			echo "wrong password";
		}

	}




?>