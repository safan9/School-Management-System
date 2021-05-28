<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

		$recipient = mysql_real_escape_string($_POST['recipient']);
		$message = mysql_real_escape_string($_POST['message']);

		$recipient = trim($recipient);
		$message = trim($message);
		$date = date('Y-m-d');
		$from = "Admin[".$_SESSION['username']."]";

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