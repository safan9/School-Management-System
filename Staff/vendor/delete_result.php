<?php
	session_start();
	require_once("../db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}

	//getting student_id from queryString
	$student_id = $_GET["id"];

	$sql = "DELETE FROM result_mst 
			WHERE student_id = '$student_id' ";

	$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Result Deleted Successfully');</script>";
			header("Location:../view_result.php");
		}else{
			echo "<script>alert('Fail to Delete Record');</script>";
			header("Location:../view_result.php");
		}
?>