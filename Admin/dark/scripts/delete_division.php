<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting division_id from queryString
	$division_id = $_GET["id"];

	$sql = "DELETE FROM division_mst 
			WHERE division_id = '$division_id' ";

	$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Division Deleted Successfully');</script>";
			header("Location:../all_courses.php");
		}else{
			echo "<script>alert('Fail to Delete Record');</script>";
			header("Location:../all_courses.php");
		}
?>