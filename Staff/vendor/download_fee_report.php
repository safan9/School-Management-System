<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	
	$output = "";
	$academic_year_id = $_GET['year'];
	$month_id = $_GET['month'];
	$div_id = $_SESSION['division_id'];
	$staff_name = $_SESSION['staff_name'];


	$student_ids = array();
	$students = array();
	$tuition_fees = array();
	$exam_fees = array();
	$lab_fees = array();
	$sports_fees = array();
	$total_fees = array();
	$dates = array();
	
	//echo $academic_year_id.$month_id;
	if($month_id != '0'){

		$sql = "SELECT *
				FROM `attendance_mst`
				WHERE academic_year_id = $academic_year_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){

			$sql = "
				SELECT fees_mst.*, division_mst.*, student_mst.*, academin_year_mst.* 
				FROM fees_mst
				INNER JOIN division_mst ON fees_mst.division_id = division_mst.division_id
				INNER JOIN student_mst ON fees_mst.student_id = student_mst.student_id
				INNER JOIN academin_year_mst ON fees_mst.academic_year_id = academin_year_mst.year_id
				WHERE fees_mst.academic_year_id = $academic_year_id AND fees_mst.division_id = $div_id
				ORDER BY student_mst.student_id";
			$res = mysqli_query($conn, $sql);


			if(mysqli_num_rows($res) > 0){

				while($row = mysqli_fetch_assoc($res)){
					
					$class_name = $row['division_name'];
					$fee_date = $row['date'];
					$student_name = $row['fname']." ".$row['lname'];
					$division_name = $row['division_name'];
					$academic_year = $row['year'];
					$rollno = $row['student_id'];
					$tuition_fee = $row['tuition_fee'];
					$exam_fee = $row['exam_fee'];
					$lab_fee = $row['lab_fee'];
					$sports_fee = $row['sports_fee'];
					$total_fee = $row['total_fee'];

					array_push($student_ids, $rollno);
					array_push($students, $student_name);
					array_push($tuition_fees, $tuition_fee);
					array_push($exam_fees, $exam_fee);
					array_push($lab_fees, $lab_fee);
					array_push($sports_fees, $sports_fee);
					array_push($total_fees, $total_fee);
					array_push($dates, $fee_date);


				}
			}

		}else{

			$output .= "
				<div class='well text-warning bg-warning'>
					Attendance Not Found!
				</div>";
		}

		$output = "
					<table class='table table-bordered'>
						<thead>
							<tr>
								<td colspan='8' class='text-center bg-primary'>IQRA HIGHER SECONDARY SCHOOL</td>
							</tr>
							<tr>
								<td colspan='8' class='text-center'>ANNUAL FEES REPORT</td>
							</tr>
							<tr>
								<th>Class Name:</th>
								<td colspan='7'>$class_name</td>
							</tr>
							<tr>
								<th>Staff Name:</th>
								<td colspan='7'>$staff_name</td>
							</tr>
							<tr>
								<th>Frequency:</th>
								<td colspan='7'>Annual</td>
							</tr>
							<tr>
								<th>Academic Year:</th>
								<td colspan='7'>$academic_year</td>
							</tr>
						

							<tr>
								<th>Roll No</th>
								<th>Student Name</th>
								<th>Tuition Fee</th>
								<th>Exam Fee</th>
								<th>Lab Fee</th>
								<th>Sports Fee</th>
								<th>Total Fee</th>
								<th>Date Of Entry</th>
							</tr>
						</thead>
						<tbody>
				";
		for($i = 0; $i < count($student_ids); $i++){

			$rollno = $student_ids[$i];
			$student_name = $students[$i];
			$tuition_fee = $tuition_fees[$i];
			$exam_fee = $exam_fees[$i];
			$lab_fee = $lab_fees[$i];
			$sports_fee = $sports_fees[$i];
			$total_fee = $total_fees[$i];
			$date = $dates[$i];
			$output .= "
						<tr>
							<td>$rollno</td>
							<td>$student_name</td>
							<td>&#x20b9; $tuition_fee</td>
							<td>&#x20b9; $exam_fee</td>
							<td>&#x20b9; $lab_fee</td>
							<td>&#x20b9; $sports_fee</td>
							<th>&#x20b9; $total_fee</th>
							<td>$date</td>
						</tr>
			";
		}
		$output .= "
					</tbody>
					</table>
					<button class='btn btn-primary' onclick='window.print();'>Print</button>
					<a href='../fee_report.php' class='btn btn-warning'>Go Back</a>
					<a href='excel_fee.php?year=$academic_year_id' 
						class='btn btn-success'>Export To MS-EXCEL</a>
				";

	}else{
		echo "";
	}
?>
<html>
<head>
	<title>Download Report</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/assets/bootstrap.min.css">
</head>
<body>
	<div class='container'>
		<?php 

			echo $output; 
		?>
	</div>
</body>
</html>