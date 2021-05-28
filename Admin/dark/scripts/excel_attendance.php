<?php
	//checking if user already logged in.
	session_start();
	require_once('db_connection.php');
	if(!isset($_SESSION["admin_id"])){
		header("Location:../login.php");
	}
	
	$output = "";
	$academic_year_id = $_GET['year'];
	$month_id = $_GET['month'];
	$div_id = $_GET['div_id'];
	$staff_name = $_GET['name'];


	$student_ids = array();
	$students = array();
	$present_days = array();
	$absent_days = array();
	$dates = array();
	
	//echo $academic_year_id.$month_id;
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

				while($row = mysqli_fetch_assoc($res)){
					
					$class_name = $row['division_name'];
					$attendance_date = $row['entry_date'];
					$student_name = $row['fname']." ".$row['lname'];
					$division_name = $row['division_name'];
					$academic_year = $row['year'];
					$present_day = $row['present_days'];
					$absent_day = $row['absent_days'];
					$month = $row['month_name'];
					$month_id = $row['month_id'];
					$rollno = $row['student_id'];
					$attendance_id = $row['attendance_id'];

					array_push($student_ids, $rollno);
					array_push($students, $student_name);
					array_push($present_days, $present_day);
					array_push($absent_days, $absent_day);
					array_push($dates, $attendance_date);


				}
			}

		}else{

			$output .= "
				<div class='well text-warning bg-warning'>
					Attendance Not Found!
				</div>";
		}

		$output = "
					<table border='1'>
						<thead>
							<tr>
								<td colspan='5' align='center'>IQRA HIGHER SECONDARY SCHOOL</td>
							</tr>
							<tr>
								<td colspan='5' align='center'>MONTHLY ATTENDANCE REPORT</td>
							</tr>
							<tr>
								<th>Class Name:</th>
								<td colspan='4' >$class_name</td>
							</tr>
							<tr>
								<th>Staff Name:</th>
								<td colspan='4'>$staff_name</td>
							</tr>
							<tr>
								<th>Month Name:</th>
								<td colspan='4'>$month</td>
							</tr>
							<tr>
								<th>Academic Year:</th>
								<td colspan='4'>$academic_year</td>
							</tr>
						

							<tr>
								<th>Roll No</th>
								<th>Student Name</th>
								<th>Present Days</th>
								<th>Absent Days</th>
								<th>Date of Entry</th>
							</tr>
						</thead>
						<tbody>
				";
		for($i = 0; $i < count($student_ids); $i++){

			$rollno = $student_ids[$i];
			$student_name = $students[$i];
			$present_day = $present_days[$i];
			$absent_day = $absent_days[$i];
			$date = $dates[$i];
			$output .= "
						<tr>
							<td align='center'>$rollno</td>
							<td>$student_name</td>
							<td align='left'>$present_day</td>
							<td align='left'>$absent_day</td>
							<td align='center'>$attendance_date</td>
						</tr>
			";
		}
		$output .= "
					</tbody>
					</table>
				";

	}else{
		echo "";
	}
?>
<html>
<head>
	<title>Download Report</title>
</head>
<body>
	<div class='container'>
		<?php 
			$file = $month."_attendance_report_admin";
			$filename = $file.'.xls';
			header("Content-Type: application/vnd.ms-excel");
			header("Content-disposition: attachement; filename=$filename");
			echo $output; 
		?>
	</div>
</body>
</html>