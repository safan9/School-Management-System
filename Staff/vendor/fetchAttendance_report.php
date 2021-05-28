<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	
	$output = "";
	$academic_year_id = $_POST['year_id'];
	$month_id = $_POST['month_id'];
	$div_id = $_SESSION['division_id'];
	
	if($month_id != '0'){

		$sql = "SELECT *
				FROM `attendance_mst`
				WHERE academic_year_id = $academic_year_id AND month_id = $month_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){

			$sql = "
				SELECT attendance_mst.*, division_mst.division_name, month_mst.month_name, student_mst.*, academin_year_mst.* 
				FROM attendance_mst
				INNER JOIN division_mst ON attendance_mst.division_id = division_mst.division_id
				INNER JOIN month_mst ON attendance_mst.month_id = month_mst.month_id
				INNER JOIN student_mst ON attendance_mst.student_id = student_mst.student_id
				INNER JOIN academin_year_mst ON attendance_mst.academic_year_id = academin_year_mst.year_id
				WHERE attendance_mst.academic_year_id = $academic_year_id AND attendance_mst.month_id = $month_id
					AND attendance_mst.division_id = $div_id";
			$res = mysqli_query($conn, $sql);


			if(mysqli_num_rows($res) > 0){

				$output = "
					<table class='table table-bordered'>
						<thead>
							<tr>
								<th>Roll No</th>
								<th>Student Name</th>
								<th>Class</th>
								<th>Month</th>
								<th>Academic Year</th>
								<th>Present Days</th>
								<th>Absent Days</th>
								<th>Date Of Entry</th>
							</tr>
						</thead>
						<tbody>
				";
				while($row = mysqli_fetch_assoc($res)){
					
					$class_name = $row['division_name'];
					$attendance_date = $row['entry_date'];
					$student_name = $row['fname']." ".$row['lname'];
					$division_name = $row['division_name'];
					$academic_year = $row['year'];
					$academic_year_id = $row['year_id'];
					$present_days = $row['present_days'];
					$absent_days = $row['absent_days'];
					$month = $row['month_name'];
					$month_id = $row['month_id'];
					$rollno = $row['student_id'];
					$attendance_id = $row['attendance_id'];

					$output .= "
						<tr>
							<td>$rollno</td>
							<td>$student_name</td>
							<td>$class_name</td>
							<td>$month</td>
							<td>$academic_year</td>
							<td>$present_days</td>
							<td>$absent_days</td>
							<td>$attendance_date</td>
						</tr>
					";

				}
				$output .= "
					</tbody>
					</table>
					<a class='btn btn-primary' href='vendor/download_attendance_report.php?month=$month_id&year=$academic_year_id'>Print Preview</a>
				";
			}else{

			$output .= "
				<div class='well text-warning bg-warning'>
					Attendance Not Found!
				</div>";
		}}

			//echo $output;
	}else{
		$output .=  "<div class='well'>PLEASE SELECT A MONTH</div>";
	}

	echo $output;
?>