<?php
	session_start();
	require_once("../db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["student_id"])){
		header("Location:../login.php");
	}

		$message = mysql_real_escape_string($_POST['message']);

		$message = trim($message);
		$date = date('Y-m-d');
		$from = $_SESSION['student_id'];

		if(empty($message)){
			echo "<p class='text-center bg-danger'>Please Enter Some Message</p>";
		}else{
			$sql = "INSERT INTO feedback_mst
					( `feedback_id`, `message`, `date`, `student_id`)
					VALUES(NULL, '$message', '$date', '$from')";
			$result = mysqli_query($conn, $sql);


			if($result){
			echo "<p class='bg-success text-center'>Feedback Sent Successfully</p>";
			}else{
				echo "<p class='text-center bg-danger'>Feedback Not Sent Successfully</p>";
			}
		}

		
	
?>