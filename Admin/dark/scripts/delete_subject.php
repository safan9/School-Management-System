<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting subject_id from queryString
	$subject_id = $_GET["id"];

	$sql = "DELETE FROM subject_mst 
			WHERE subject_id = '$subject_id' ";

	$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Subject Deleted Successfully');</script>";
			header("Location:../all_subjects.php");
		}else{
			echo "<script>alert('Fail to Delete Record');</script>";
			header("Location:../all_subjects.php");
		}
?>