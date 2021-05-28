<?php
	session_start();
	require_once("../db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["staff_id"]) && !isset($_SESSION['staff_name'])){
		header("Location:../login.php");
	}

		$message = mysql_real_escape_string($_POST['message']);

		$recipient = 'student';
		$message = trim($message);
		$date = date('Y-m-d');
		$from = "Staff[".$_SESSION['staff_name']."]";

		if(empty($message)){
			echo "<p class='text-center bg-danger'>Please Enter Some Message</p>";
		}else{
			$sql = "INSERT INTO notification_mst
					( `notification_id`, `message`, `date`, `from`, `to`)
					VALUES(NULL, '$message', '$date', '$from', '$recipient')";
			$result = mysqli_query($conn, $sql);


			if($result){
			echo "<p class='bg-success text-center'>Notification Sent Successfully</p>";
			}else{
				echo "<p class='text-center bg-danger'>Notification Not Sent Successfully</p>";
			}
		}

		
	
?>