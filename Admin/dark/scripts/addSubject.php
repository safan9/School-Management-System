<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	if(isset($_POST["btn-submit"])){
		$subject_name = $_POST["subject_name"];
		$class_id = $_POST["class_name"];
		$staff_id = $_POST["staff_name"];

		$sql = "INSERT INTO subject_mst(
				`subject_id`, `subject_name`, `class_id`, `staff_id`, `syllabus_file` ) 
				VALUES( NULL, '$subject_name', '$class_id', '$staff_id', '1')";
		$result = mysqli_query($conn, $sql);

		if($result){
			echo "<script>alert('Subject Added Successfully');</script>";
			header("Location:../all_subjects.php");
		}else{
			echo "<script>alert('Fail to Add Subject');</script>";
			header("Location:../all_subjects.php");
		}

	}
?>