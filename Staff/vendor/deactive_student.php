<?php
	session_start();

	require_once("../db_connection.php");
	//checking if staf already logged in or not 
	if(!isset($_SESSION["staff_id"]) && !isset($_SESSION["staff_name"])){
		header("Location:../../login.php");
	}
	//getting student_id from queryString
	$student_id = $_GET["id"];
	//getting records from table for given student_id.
	$sql = "SELECT * FROM student_mst WHERE student_id='$student_id'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);

		//deactivate the staff account.
		$active = "false";
		$sql = "UPDATE student_mst 
				SET `isactive` = '$active' 
				WHERE `student_id` = '$student_id' ";

		$res = mysqli_query($conn, $sql);
		if($res){
			header("Location:../my_classes.php");	
		}else{
			echo "Some Error Occured!";
		}
		
	}else{
		echo "No Records Found!";
		header("Location:../my_classes.php");
	}

?>