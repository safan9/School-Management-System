<?php
	//checking if user already logged in.
	session_start();
	require_once('db_connection.php');
	if(!isset($_SESSION["admin_id"])){
		header("Location:../login.php");
	}
	
	$output = "";
	$academic_year_id = $_POST['year_id'];
	$subject_id = $_POST['subject_id'];
	$class_id = $_POST['class_id'];
	$div_id = $_POST['division_id'];
	
	if($academic_year_id != '0'){

		$sql = "SELECT *
				FROM `result_mst`
				WHERE academic_year_id = $academic_year_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){

			$sql = "
				SELECT result_mst.*, division_mst.*, student_mst.*, academin_year_mst.* , subject_mst.*, staff_mst.*
				FROM result_mst
				INNER JOIN division_mst ON result_mst.division_id = division_mst.division_id
				INNER JOIN student_mst ON result_mst.student_id = student_mst.student_id
				INNER JOIN academin_year_mst ON result_mst.academic_year_id = academin_year_mst.year_id
				INNER JOIN subject_mst ON result_mst.subject_id = subject_mst.subject_id
				INNER JOIN staff_mst ON division_mst.staff_id = staff_mst.staff_id
				WHERE result_mst.academic_year_id = $academic_year_id AND result_mst.division_id = $div_id
					AND result_mst.subject_id = $subject_id";
			$res = mysqli_query($conn, $sql);


			if(mysqli_num_rows($res) > 0){

				$output = "
					<table class='table table-bordered'>
						<thead>
							<tr>
								<th>Roll No</th>
								<th>Student Name</th>
								<th>Subject Name</th>
								<th>Marks</th>
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
					$marks = $row['marks'];
					$result_date = $row['entry_date'];
					$subject_name = $row['subject_name'];
					$staff_name = $row['first_name'];

					$output .= "
						<tr>
							<td>$rollno</td>
							<td>$student_name</td>
							<td>$subject_name</td>
							<td>$marks</td>
							<td>$result_date</td>
						</tr>
					";

				}
				$output .= "
					</tbody>
					</table>
					<a class='btn btn-primary' href='scripts/download_result_report.php?year=$academic_year_id&subject_id=$subject_id&div_id=$div_id&name=$staff_name'>Print Preview</a>
				";
			}else{

			$output .= "
				<div class='well text-danger'>
					Result Not Found!<br/>
					Please Select Subject
				</div>";
		}}

			//echo $output;
	}else{
		$output .=  "<div class='well'>PLEASE SELECT A YEAR AND SUBJECT</div>";
	}

	echo $output;
?>