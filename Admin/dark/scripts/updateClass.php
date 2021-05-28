<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting class_id from queryString
	$class_id = $_GET["id"];

	if(isset($_POST["btn-class-submit"])){

		$class_name = $_POST['class_name'];
		
		$sql = "
			UPDATE class_mst
			SET `class_name` = '$class_name'
			WHERE `class_id` = '$class_id' ";

		$res = mysqli_query($conn, $sql);

		if($res){
			echo "<script>alert('Class Updated Successfully');</script>";
			header("Location:../all_courses.php");
		}else{
			echo "<script>alert('Fail to Register');</script>";
			header("Location:../all_courses.php");
		}
	}
?>
