<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["student_id"])){
		header("Location:login.php");
	}
	
	$output = "";

	$student_id = $_POST['student_id'];
	$month_id = $_POST['month_id'];
	if($student_id != '0'){

		$sql = "SELECT *
				FROM `attendance_mst`
				WHERE student_id = $student_id AND month_id = $month_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){

			$sql = "
				SELECT attendance_mst.*, division_mst.division_name, month_mst.month_name, student_mst.*, academin_year_mst.* 
				FROM attendance_mst
				INNER JOIN division_mst ON attendance_mst.division_id = division_mst.division_id
				INNER JOIN month_mst ON attendance_mst.month_id = month_mst.month_id
				INNER JOIN student_mst ON attendance_mst.student_id = student_mst.student_id
				INNER JOIN academin_year_mst ON attendance_mst.academic_year_id = academin_year_mst.year_id
				WHERE attendance_mst.student_id = $student_id AND attendance_mst.month_id = $month_id";
			$res = mysqli_query($conn, $sql);

			
			$class_name = '';
			$attendance_date = '';
			$student_name = '';
			$division_name = '';
			$academic_year = '';
			$present_days = '';
			$absent_days = '';
			$month = '';

			if(mysqli_num_rows($res) > 0){
				while($row = mysqli_fetch_assoc($res)){
					
					$class_name = $row['division_name'];
					$attendance_date = $row['entry_date'];
					$student_name = $row['fname']." ".$row['lname'];
					$division_name = $row['division_name'];
					$academic_year = $row['year'];
					$present_days = $row['present_days'];
					$absent_days = $row['absent_days'];
					$month = $row['month_name'];
				}
			}

		

			$output .= "
				<table class='table table-bordered'>
					<tr>
						<td colspan='2' class='bg-primary text-center'>IQRA HIGHER SECONDARY SCHOOL</td>
					</tr>
					<tr>
						<th>Name: </th>
						<td>$student_name</td>						
					</tr>
					<tr>
						<th>Class: </th>
						<td>$class_name</td>						
					</tr>
					<tr>
						<th>Academic Year</th>
						<td>$academic_year</td>
					</tr>
					<tr>
						<th>Month</th>
						<td>$month</td>
					</tr>
					<tr>
						<th>Present Days</th>
						<th>$present_days</th>
					</tr>
					<tr>
						<th>Absent Days</th>
						<th>$absent_days</th>
					</tr>
					<tr>
						<th>Date</th>
						<td>$attendance_date</td>
					</tr>
					</table>
					";	
		}else{

			$output .= "
				<div class='well text-warning bg-warning'>
					Attendance Not Added Yet!
				</div>
			";
		}

		echo $output;
	}else{
		echo "";
	}
?>