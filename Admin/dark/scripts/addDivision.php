<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	if(isset($_POST["btn-division-submit"])){
		$division_name = $_POST["division_name"];
		$room_no = $_POST["room_no"];
		$class_id = $_POST["class_name"];
		$staff_id = $_POST["staff_name"];

		$sql = "INSERT INTO division_mst(
				`division_id`, `division_name`, `room_no`, `staff_id`, `class_id`) 
				VALUES( NULL, '$division_name', '$room_no', '$staff_id', '$class_id')";
		$result = mysqli_query($conn, $sql);

		if($result){
			echo "<script>alert('Division Added Successfully');</script>";
			header("Location:../add_course.php");
		}else{
			echo "<script>alert('Fail to Add Division');</script>";
			header("Location:../add_course.php");
		}

	}
?>