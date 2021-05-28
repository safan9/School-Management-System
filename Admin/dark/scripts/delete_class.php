<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting class_id from queryString
	$class_id = $_GET["id"];

	$sql = "DELETE FROM class_mst
			WHERE class_id = '$class_id' ";

	$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Class Deleted Successfully');</script>";
			header("Location:../all_courses.php");
		}else{
			echo "<script>alert('Fail to Delete Class');</script>";
			header("Location:../all_courses.php");
		}
?>