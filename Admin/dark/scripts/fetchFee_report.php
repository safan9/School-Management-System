<?php
	//checking if user already logged in.
	session_start();
	require_once('db_connection.php');
	if(!isset($_SESSION["admin_id"])){
		header("Location:../login.php");
	}
	
	$output = "";
	$academic_year_id = $_POST['year_id'];
	$div_id = $_POST['division_id'];
	
	if($academic_year_id != '0'){

		$sql = "SELECT *
				FROM `fees_mst`
				WHERE academic_year_id = $academic_year_id AND division_id = $div_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){

			$sql = "
				SELECT fees_mst.*, division_mst.*, student_mst.*, academin_year_mst.*, staff_mst.*
				FROM fees_mst
				INNER JOIN division_mst ON fees_mst.division_id = division_mst.division_id
				INNER JOIN student_mst ON fees_mst.student_id = student_mst.student_id
				INNER JOIN academin_year_mst ON fees_mst.academic_year_id = academin_year_mst.year_id
				INNER JOIN staff_mst ON division_mst.staff_id = staff_mst.staff_id
				WHERE fees_mst.academic_year_id = $academic_year_id AND fees_mst.division_id = $div_id";
			$res = mysqli_query($conn, $sql);


			if(mysqli_num_rows($res) > 0){

				$output = "
					<table class='table table-bordered'>
						<thead>
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
				while($row = mysqli_fetch_assoc($res)){
					
					$class_name = $row['division_name'];
					$student_name = $row['fname']." ".$row['lname'];
					$division_name = $row['division_name'];
					$academic_year = $row['year'];
					$academic_year_id = $row['year_id'];
					$rollno = $row['student_id'];
					$tuition_fee = $row['tuition_fee'];
					$exam_fee = $row['exam_fee'];
					$lab_fee = $row['lab_fee'];
					$sports_fee = $row['sports_fee'];
					$total_fee = $row['total_fee'];
					$fee_date = $row['date'];
					$staff_name = $row['first_name'];

					$output .= "
						<tr>
							<td>$rollno</td>
							<td>$student_name</td>
							<td>&#x20b9; $tuition_fee</td>
							<td>&#x20b9; $exam_fee</td>
							<td>&#x20b9; $lab_fee</td>
							<td>&#x20b9; $sports_fee</td>
							<td>&#x20b9; $total_fee</td>
							<td>$fee_date</td>
						</tr>
					";

				}
				$output .= "
					</tbody>
					</table>
					<a class='btn btn-primary' href='scripts/download_fee_report.php?year=$academic_year_id&div_id=$div_id&name=$staff_name'>
						Print Preview
					</a>
				";
			}else{

			$output .= "
				<div class='well text-danger'>
					Attendance Not Found!
				</div>";
		}}

			//echo $output;
	}else{
		$output .=  "<div class='well'>PLEASE SELECT A ACADEMIC YEAR</div>";
	}

	echo $output;
?>