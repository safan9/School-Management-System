<?php
	//checking if user already logged in
	session_start();
	if(!isset($_SESSION["staff_id"])){
		header("Location:../../login.php");
	}
	
	require_once("../db_connection.php");
	//getting value from session.
	$staff_id = $_SESSION['staff_id'];

	$password = mysql_real_escape_string($_POST['password']);

	$sql = "SELECT * FROM `staff_mst`
			WHERE staff_id = $staff_id";
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