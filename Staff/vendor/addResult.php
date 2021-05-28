<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	//fetching data from session
	$class_id = $_SESSION['class_id'];
	if(isset($_POST["btn-add"])){
		//fetching form data
		$student_id = $_POST['students'];
		//getting students' division_id
		$division_id = '';
		$sql = "SELECT *
				FROM `student_mst`
				WHERE student_id = $student_id";
		$res = mysqli_query($conn, $sql);
		if(mysqli_num_rows($res) > 0){
			$row = mysqli_fetch_assoc($res);
			$division_id = $row['division_id'];
		}
		//getting current academic year
		$academic_year = '';
		$sql = "SELECT *
				FROM `academin_year_mst`
				WHERE status = 'active'";
		$res = mysqli_query($conn, $sql);
		if(mysqli_num_rows($res) > 0){
			$row = mysqli_fetch_assoc($res);
			$academic_year = $row['year_id'];
		}

		$marks = $_POST['marks'];
		$subject_id= array();
		if(!empty($student_id) && !empty($class_id)){
			$sql = "SELECT *
					FROM `subject_mst`
					WHERE class_id = $class_id";
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
						INSERT INTO result_mst(`result_id`, `student_id`, `division_id`, `subject_id`, `academic_year_id`, `entry_date`, `marks`)
						VALUES(NULL, '$student_id', '$division_id', '$sub_id', '$academic_year', '$date', '$mark')";
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