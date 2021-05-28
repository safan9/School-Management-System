<?php
	session_start();
	//login.php
	require_once("../db_connection.php");
	
	$email = $_POST["email"];
	$password = $_POST["password"];

	if(empty($email) || empty($password)){
		echo "<b>Please Enter login details</b>";
	}else{
		$sql = "SELECT staff_mst.*, division_mst.* 
				FROM staff_mst INNER JOIN division_mst ON staff_mst.staff_id = division_mst.staff_id
				WHERE email='$email' AND password='$password'";
		$res = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($res);
		if(mysqli_num_rows($res) == 1 ){
			if($user['isactive'] == 'true'){
				//set session variables
				$_SESSION["staff_id"] = $user["staff_id"];
				$_SESSION['staff_name'] = $user['first_name'];
				$_SESSION['division_name'] = $user['division_name'];
				$_SESSION['division_id'] = $user['division_id'];
				$_SESSION['class_id'] = $user['class_id'];
				//redirect to home page
				echo "redirect";	
			}
			else{
				echo "<b>Your Account is not active. Please Contact Admin</b>";
			}
		}else{
			echo "<b>Incorrect Login Details</b>";
		}	
	}
	
	
?>