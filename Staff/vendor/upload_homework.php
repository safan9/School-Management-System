<?php
	session_start();
	require_once("../db_connection.php");


	$staff_id = $_SESSION['staff_id'];
	$_SESSION['file_status'] = '';
	$target_dir = "homework/";
	$target_file = $target_dir.$_FILES['homework_file']['name'];
	$tmp_name = $_FILES['homework_file']['tmp_name'];
	$date = date("Y-m-d");
	$file_name = array_pop(array_reverse(explode('.', $_FILES['homework_file']['name'])));
	//echo $file_name;
	
	if(isset($_POST['btn-upload'])){
		if(!empty($_FILES['homework_file']['name'])){
			$sql = "
				INSERT INTO `homework_mst` (
					`homework_id` ,
					`file_name` ,
					`homework` ,
					`date` ,
					`staff_id`
					)
				VALUES(NULL, '$file_name', '$target_file', '$date', '$staff_id') ";
			$result = mysqli_query($conn, $sql);
			if($result){
				if(move_uploaded_file($tmp_name, $target_file)){
					$_SESSION['file_status'] = "file Uploaded Successfully";
					header("Location:../study_corner.php");
				}
				else{
					$_SESSION['file_status'] = "problem in storing file to web server";
					header("Location:../study_corner.php");
				}
			}else{
				$_SESSION['file_status'] = "error in sql";
				header("Location:../study_corner.php");
			}
		}else{
			$_SESSION['file_status'] = "select file";
			header("Location:../study_corner.php");
		}
	}
?>