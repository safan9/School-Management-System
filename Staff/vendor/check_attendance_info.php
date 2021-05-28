<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	//fetching data from session
	$class_id = $_SESSION['class_id'];
	$output = "
		<label class='control-label col-md-2'>
			Enter Attendance:
		</label><br><br>
	";

	$student_id = $_POST['student_id'];
	$month_id = $_POST['month_id'];

	//echo $student_id.$month_id;
	if($student_id != '0' && $month_id != '0'){

		$sql = "SELECT *
				FROM `student_mst`
				WHERE student_id = $student_id";
		$res = mysqli_query($conn, $sql);

		if(mysqli_num_rows($res) > 0){
			$student = mysqli_fetch_assoc($res);
		}

		$division_id = $student['division_id'];

		$sql = "SELECT *
				FROM `attendance_mst`
				WHERE student_id = $student_id AND month_id = $month_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			$output .= "
				<div class='well text-warning bg-warning'>
					Attendance Already Added
				</div>
				<a href='view_attendance.php' class='btn btn-primary'>View Now</a>
			";
		}else{
					$output .= "
						<div class='form-group row'>
							<label class='control-label col-md-2'>Enter Present Days</label>
							<input type='text' name='present_days' placeholder='Enter Present Days' class='col-md-5'>
						</div>
						<div class='form-group row'>
							<label class='control-label col-md-2'>Enter Absent Days</label>
							<input type='text' name='absent_days' placeholder='Enter Present Days' class='col-md-5'>
						</div>
					";
				
		}

		echo $output;
	}else{
		echo "select student and month";
	}
?>