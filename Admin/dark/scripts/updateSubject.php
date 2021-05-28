<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting subject_id from queryString
	$subject_id = $_GET["id"];

	if(isset($_POST["btn-submit"])){

		$subject_name = $_POST['subject_name'];
		$class_id = $_POST['class_name'];
		$staff_id = $_POST['staff_name'];

		//echo $subject_name.$room_no.$class_id.$staff_id;
		
		$sql = "
			UPDATE subject_mst
			SET `subject_name` = '$subject_name' ,
				`staff_id` = '$staff_id' ,
				`class_id` = '$class_id'
			WHERE `subject_id` = '$subject_id' ";

		$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Subject Updated Successfully');</script>";
			header("Location:../all_subjects.php");
		}else{
			echo "<script>alert('Fail to Update');</script>";
			header("Location:../all_subjects.php");
		}
	}
?>
