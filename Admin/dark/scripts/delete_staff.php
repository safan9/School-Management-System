<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting staff_id from queryString
	$staff_id = $_GET["id"];

	$sql = "DELETE FROM staff_mst 
			WHERE staff_id = '$staff_id' ";

	$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Staff Deleted Successfully');</script>";
			header("Location:../all_professors.php");
		}else{
			echo "<script>alert('Fail to Delete Record');</script>";
			header("Location:../all_professors.php");
		}
?>