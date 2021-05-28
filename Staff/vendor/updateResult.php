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
		$student_id = $_POST['student_id1'];

		$marks = $_POST['marks'];
		$subject_id= array();

		echo $class_id."<br>".$student_id;
		if(!empty($student_id) && !empty($class_id)){
			$sql = "SELECT *
					FROM `result_mst`
					WHERE student_id = $student_id";
			$res = mysqli_query($conn, $sql);

			if(mysqli_num_rows($res) > 0){
				while($subject = mysqli_fetch_assoc($res)){
					array_push($subject_id, $subject['subject_id']);
				}
				//loping through all subjects to enter their marks
				for($i=0; $i<count($marks); $i++){
					$mark = $marks[$i];
					$sub_id = $subject_id[$i]; 
					$date = date("Y-m-d");
					$sql = "
						UPDATE result_mst
						SET `marks` = '$mark'
						WHERE `subject_id` = '$sub_id' AND `student_id` = '$student_id' ";
					$result = mysqli_query($conn, $sql);

					if($i == count($marks)-1){
						if($result){
							echo "result added successfully";
							header("Location:../view_result.php");
						}else{
							echo "Something went wrong";
							die($result);
						}
					}
				}
			}
		}else{
			echo "enter student id and class_id";
		}
	}else{
		echo "illigal access";
	}
?>