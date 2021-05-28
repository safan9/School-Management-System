<?php
	session_start();
	require_once("../db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}

	//getting attendance_id from queryString
	$attendance_id = $_GET["id"];

	$sql = "DELETE FROM attendance_mst 
			WHERE attendance_id = '$attendance_id' ";

	$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('attendance Deleted Successfully');</script>";
			header("Location:../view_attendance.php");
		}else{
			echo "<script>alert('Fail to Delete Record');</script>";
			header("Location:../view_attendance.php");
		}
?>