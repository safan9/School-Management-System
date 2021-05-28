<?php
	session_start();
	require_once("../db_connection.php");


	$staff_id = $_SESSION['staff_id'];
	$_SESSION['file_status'] = '';
	$target_dir = "material/";
	$target_file = $target_dir.$_FILES['Material_File']['name'];
	$tmp_name = $_FILES['Material_File']['tmp_name'];
	$date = date("Y-m-d");
	$subject = $_POST['subjects'];
	$file_name = array_pop(array_reverse(explode('.', $_FILES['Material_File']['name'])));
	//echo $file_name;
	
	if(isset($_POST['btn-upload'])){
		if(!empty($_FILES['Material_File']['name']) && $subject != '0'){
			$sql = "
				INSERT INTO `study_material_mst` (
							`study_mat_id` ,
							`file_name` ,
							`file` ,
							`subject_id` ,
							`staff_id` ,
							`date`
							)
				VALUES(NULL, '$file_name', '$target_file', '$subject', '$staff_id', '$date') ";
			$result = mysqli_query($conn, $sql);
			if($result){
				if(move_uploaded_file($tmp_name, $target_file)){
					$_SESSION['file_status'] = "file Uploaded Successfully";
					header("Location:../study_material.php");
				}
				else{
					$_SESSION['file_status'] = "problem in storing file to web server";
					header("Location:../study_material.php");
				}
			}else{
				$_SESSION['file_status'] = "error in sql";
				header("Location:../study_material.php");
			}
		}else{
			$_SESSION['file_status'] = "select file and subject";
			header("Location:../study_material.php");
		}
	}
?>