<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting notification_id from queryString
	$notification_id = $_GET["id"];

	$sql = "DELETE FROM notification_mst 
			WHERE notification_id = '$notification_id' ";

	$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Notification Deleted Successfully');</script>";
			header("Location:../all_notifications.php");
		}else{
			echo "<script>alert('Fail to Delete Record');</script>";
			header("Location:../all_notifications.php");
		}
?>