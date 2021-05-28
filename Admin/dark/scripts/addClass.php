<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	if(isset($_POST["btn-class-submit"])){
		$class_name = $_POST["class_name"];

		$sql = "INSERT INTO class_mst(
				`class_id`, `class_name` ) 
				VALUES( NULL, '$class_name')";
		$result = mysqli_query($conn, $sql);

		if($result){
			echo "<script>alert('Class Added Successfully');</script>";
			header("Location:../add_course.php");
		}else{
			echo "<script>alert('Fail to Add Class');</script>";
			header("Location:../add_course.php");
		}

	}
?>