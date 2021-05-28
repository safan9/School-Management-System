<?php
	session_start();
	require_once("db_connection.php");
	
	$image_id = $_GET['id'];
	$sql = "DELETE FROM `admin_gallery_mst`
			WHERE image_id = '$image_id' ";
	$res = mysqli_query($conn, $sql);

	if($res){
		$_SESSION['image_status'] = "Image Deleted Successfully";
		header("Location:../image_upload.php");
	}else{
		$_SESSION['image_status'] = "Unable to  Delete Image!";
		header("Location:../image_upload.php");
	}

?>