<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	//fetching data from session
	$class_id = $_SESSION['class_id'];
	$output = "";

	$student_id = $_POST['student_id'];
	if($student_id != '0'){


		$sql = "
				SELECT result_mst. * , division_mst.division_name, subject_mst.subject_name, student_mst . * 
				FROM result_mst
				INNER JOIN division_mst ON result_mst.division_id = division_mst.division_id
				INNER JOIN subject_mst ON result_mst.subject_id = subject_mst.subject_id
				INNER JOIN student_mst ON result_mst.student_id = student_mst.student_id
				WHERE result_mst.student_id = $student_id";
		$res = mysqli_query($conn, $sql);
		if(mysqli_num_rows($res) > 0){


			
			$student_name = '';
			$subjects = array();
			$marks = array();
			$class_name = '';
			$result_date = '';
			if(mysqli_num_rows($res) > 0){
				while($result = mysqli_fetch_assoc($res)){
					array_push($subjects, $result['subject_name']);
					array_push($marks, $result['marks']);
					$class_name = $result['division_name'];
					$result_date = $result['entry_date'];
					$student_name = $result['fname']." ".$result['lname'];
				}
			}

			$totalMarks = 0;
			$percentag = 0;
			$totalSubjects = count($subjects);
		

			$output .= "
				<table class='table table-bordered'>
					<tr>
						<th>Name: </th>
						<td>$student_name</td>						
					</tr>
					<tr>
						<th>Class: </th>
						<td>$class_name</td>						
					</tr>
					<tr>
						<th>Subjects</th>
						<th>Marks</th>
					</tr>";
			for ($i=0; $i<count($subjects); $i++) {
				$output .= "
					<tr>
						<td>$subjects[$i]</td>
						<td>$marks[$i]</td>
					</tr>
				";
				$totalMarks += $marks[$i];

			}
			$percentage = round(($totalMarks * 100) / ($totalSubjects * 100), 2);
			$output .= "
				<tr>
					<th>Total Marks:</th>
					<th>$totalMarks</th>
				</tr>
				<tr>
					<th>Percentag(%):</th>
					<th>$percentage</th>
				</tr>";
				if($percentage < 34){
					$output .= "
						<tr>
							<th>Result:</th>
							<th class='text-danger text-bold'>Fail</th>
						</tr>";
				}else{
					$output .= "<tr>
						<th>Result:</th>
						<th>Pass</th>
					</tr>";
				}
			$output .= "
				<tr>
					<th>Result Date:</th>
					<td>$result_date</td>
				</tr>
				<tr>
					<td colspan='2' class='text-center'>
						<a href='edit_result.php?stdid=$student_id' type='button' class='btn btn-primary'>Edit</a>
						<a data-id='$student_id' id='btn_delete' name='btn_delete' class='btn btn-danger btn_delete'>Delete</a>
					</td>
				</tr>
				</table>
				<a href='download_result.php?id=$student_id' class='btn btn-primary' name='btn-print''>
					Print Preview
				</a>



				";

			
				
		}else{

			$output .= "
				<div class='well text-warning bg-warning'>
					Result Not Added Yet!
				</div>
				<a href='add_result.php' class='btn btn-primary'>Add Now</a>
			";
		}

		echo $output;
	}else{
		echo "";
	}
?>