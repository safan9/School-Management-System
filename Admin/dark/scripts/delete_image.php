<?php
	session_start();
	require_once("db_connection.php");
	
	$image_id = $_GET['id'];
	$sql = "DELETE FROM `gallery_mst`
			WHERE image_id = '$image_id' ";
	$res = mysqli_query($conn, $sql);

	if($res){
		$_SESSION['image_status'] = "Image Deleted Successfully";
		header("Location:../all_images.php");
	}else{
		$_SESSION['image_status'] = "Unable to  Delete Image!";
		header("Location:../all_images.php");
	}

?>