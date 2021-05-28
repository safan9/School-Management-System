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
			Subject Names:
		</label><br><br>
	";

	$student_id = $_POST['student_id'];
	if($student_id != '0'){

		$sql = "SELECT *
				FROM `student_mst`
				WHERE student_id = $student_id";
		$res = mysqli_query($conn, $sql);

		if(mysqli_num_rows($res) > 0){
			$student = mysqli_fetch_assoc($res);
		}

		$division_id = $student['division_id'];

		$sql = "SELECT *
				FROM `result_mst`
				WHERE student_id = $student_id AND division_id = $division_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			$output .= "
				<div class='well text-warning bg-warning'>
					Result Already Added
				</div>
				<a href='view_result.php' class='btn btn-primary'>View Now</a>
			";
		}else{

			$sql = "SELECT * 
					FROM `subject_mst`
					WHERE  class_id = $class_id";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
				while($subject = mysqli_fetch_assoc($result)){
					$sub_name = $subject['subject_name'];
					$output .= "
						<div class='form-group row'>
							<label class='control-label col-md-2'>$sub_name</label>
							<input type='text' name='marks[]' placeholder='Enter Marks Out of 100' class='col-md-5'>
						</div>
					";
				}
			}else{
				$output .= "<div class='well text-danger'>No Subjects Found For Your Class</div>";
			}
		}

		echo $output;
	}else{
		echo "";
	}
?>