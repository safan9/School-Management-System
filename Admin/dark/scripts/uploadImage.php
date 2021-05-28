<?php
	session_start();
	require_once("db_connection.php");

	$_SESSION['image_status'] = '';
	$target_dir = "images/web/";
	$target_file = $target_dir.$_FILES['image-upload']['name'];
	$tmp_name = $_FILES['image-upload']['tmp_name'];
	$date = date("Y-m-d");
	//$student_id = $_SESSION['student_id'];
	$img_name = array_pop(array_reverse(explode('.', $_FILES['image-upload']['name'])));

	if(isset($_POST['btn-upload'])){
		if(!empty($_FILES['image-upload']['name'])){
			$sql = "
				INSERT INTO `admin_gallery_mst` (
					`image_id` ,
					`image_name` ,
					`image` ,
					`date`
					)
				VALUES(NULL, '$img_name', '$target_file', '$date') ";
			$result = mysqli_query($conn, $sql);
			if($result){
				$image_to_save = "../../../vendor/".$target_file;
				if(move_uploaded_file($tmp_name, $image_to_save)){
					$_SESSION['image_status'] = "Image Uploaded Successfully";
					header("Location:../image_upload.php");
				}
				else{
					$_SESSION['image_status'] = "problem in storing image to web server";
					header("Location:../image_upload.php");
				}
			}else{
				$_SESSION['image_status'] = "error in storing image to database";
				header("Location:../image_upload.php");
			}
		}else{
			$_SESSION['image_status'] = "select image";
			header("Location:../image_upload.php");
		}
	}
?>