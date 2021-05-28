<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting student_id from queryString
	$student_id = $_GET["id"];

	$sql = "DELETE FROM student_mst 
			WHERE student_id = '$student_id' ";

	$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Student Deleted Successfully');</script>";
			header("Location:../all_students.php");
		}else{
			echo "<script>alert('Fail to Delete Record');</script>";
			header("Location:../all_students.php");
		}
?>