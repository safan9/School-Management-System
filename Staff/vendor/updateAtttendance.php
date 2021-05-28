<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	//fetching data from session
	$class_id = $_SESSION['class_id'];
	if(isset($_POST["btn-update"])){
		//fetching form data
		$attendance_id = $_POST['attendance_id1'];
		$present = $_POST['present_days'];
		$absent = $_POST['absent_days'];
		$date = date("Y-m-d");
	
		if(!empty($absent) && !empty($present)){
					$sql = "
							UPDATE attendance_mst
							SET `absent_days` = '$absent',
								`present_days` = '$present'
							WHERE `attendance_id` = '$attendance_id' ";
					$result = mysqli_query($conn, $sql);

				
						if($result){
							echo "attendance updated successfully";
							header("Location:../view_attendance.php");
						}else{
							echo "Something went wrong";
							die($result);
						}
					
				
			
		}else{
			echo "Please enter all details";
		}
	}else{
		echo "illigal access";
	}
?>