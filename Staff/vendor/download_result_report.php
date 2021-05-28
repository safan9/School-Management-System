<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	
	$output = "";
	$academic_year_id = $_GET['year'];
	$subject_id = $_GET['subject_id'];
	$div_id = $_SESSION['division_id'];
	$staff_name = $_SESSION['staff_name'];


	$student_ids = array();
	$students = array();
	$marks = array();
	$dates = array();
	
	//echo $academic_year_id.$subject_id;
	if($subject_id != '0'){

		$sql = "SELECT *
				FROM `result_mst`
				WHERE academic_year_id = $academic_year_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){

			$sql = "
				SELECT result_mst.*, division_mst.*, student_mst.*, academin_year_mst.* , subject_mst.*
				FROM result_mst
				INNER JOIN division_mst ON result_mst.division_id = division_mst.division_id
				INNER JOIN student_mst ON result_mst.student_id = student_mst.student_id
				INNER JOIN academin_year_mst ON result_mst.academic_year_id = academin_year_mst.year_id
				INNER JOIN subject_mst ON result_mst.subject_id = subject_mst.subject_id
				WHERE result_mst.academic_year_id = $academic_year_id AND result_mst.division_id = $div_id
					AND result_mst.subject_id = $subject_id";
			$res = mysqli_query($conn, $sql);


			if(mysqli_num_rows($res) > 0){

				while($row = mysqli_fetch_assoc($res)){
					
					$class_name = $row['division_name'];
					$result_date = $row['entry_date'];
					$student_name = $row['fname']." ".$row['lname'];
					$division_name = $row['division_name'];
					$academic_year = $row['year'];
					$rollno = $row['student_id'];
					$subject_name = $row['subject_name'];
					$mark = $row['marks'];

					array_push($student_ids, $rollno);
					array_push($students, $student_name);
					array_push($marks, $mark);
					array_push($dates, $result_date);


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
								<td colspan='8' class='text-center'>SUBJECT-VISE REPORT</td>
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
								<th>Academic Year:</th>
								<td colspan='7'>$academic_year</td>
							</tr>
							<tr>
								<th>Subject Name:</th>
								<th colspan='7'>$subject_name</th>
							</tr>
						

							<tr>
								<th>Roll No</th>
								<th>Student Name</th>
								<th>Marks</th>
								<th>Date Of Entry</th>
							</tr>
						</thead>
						<tbody>
				";
		for($i = 0; $i < count($student_ids); $i++){

			$rollno = $student_ids[$i];
			$student_name = $students[$i];
			$date = $dates[$i];
			$mark = $marks[$i];
			$output .= "
						<tr>
							<td>$rollno</td>
							<td>$student_name</td>
							<td>$mark</td>
							<td>$date</td>
						</tr>
			";
		}
		$output .= "
					</tbody>
					</table>
					<button class='btn btn-primary' onclick='window.print();'>Print</button>
					<a href='../result_report.php' class='btn btn-warning'>Go Back</a>
					<a href='excel_result.php?year=$academic_year_id&subject_id=$subject_id&div=$div_id' 
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