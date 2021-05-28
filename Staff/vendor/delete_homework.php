<?php 
	session_start();
	$staff_id = $_SESSION['staff_id'];
	require_once("../db_connection.php");

	$homework_id = $_GET['id'];

	$sql = "DELETE FROM `homework_mst`
			WHERE homework_id = '$homework_id' AND staff_id = '$staff_id' ";
	$res = mysqli_query($conn, $sql);

	if($res){
		$_SESSION['file_status'] = "File Deleted Successfully";
		header("Location:../study_corner.php");
	}else{
		$_SESSION['file_status'] = "Unable to  Delete File!";
		header("Location:../study_corner.php");
	}
?>