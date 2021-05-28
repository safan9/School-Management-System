<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting division_id from queryString
	$division_id = $_GET["id"];

	if(isset($_POST["btn-division-submit"])){

		$div_name = $_POST['division_name'];
		$room_no =  $_POST['room_no'];
		$class_id = $_POST['class_name'];
		$staff_id = $_POST['staff_name'];

		//echo $div_name.$room_no.$class_id.$staff_id;
		
		$sql = "
			UPDATE division_mst
			SET `division_name` = '$div_name' ,
				`room_no` = '$room_no' ,
				`staff_id` = '$staff_id' ,
				`class_id` = '$class_id'
			WHERE `division_id` = '$division_id' ";

		$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Division Updated Successfully');</script>";
			header("Location:../all_courses.php");
		}else{
			echo "<script>alert('Fail to Register');</script>";
			header("Location:../all_courses.php");
		}
	}
?>
