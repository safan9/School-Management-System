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
			Fees Details:
		</label><br><br>
	";

	$student_id = $_POST['student_id'];
	if($student_id != '0'){

		$sql = "SELECT student_mst.*, division_mst.*
				FROM `student_mst` INNER JOIN `division_mst` ON student_mst.division_id = division_mst.division_id
				WHERE student_id = $student_id";
		$res = mysqli_query($conn, $sql);

		if(mysqli_num_rows($res) > 0){
			$student = mysqli_fetch_assoc($res);
			$student_name = $student['fname']." ".$student['lname'];
			$class_name = $student['division_name'];
		}

		$division_id = $student['division_id'];

		$sql = "SELECT *
				FROM `fees_mst`
				WHERE student_id = $student_id AND division_id = $division_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			$output .= "
				<div class='well text-warning bg-warning'>
					Fees Already Added
				</div>
				<a href='view_fees.php' class='btn btn-primary'>View Now</a>
			";
		}else{

					$sql = "SELECT *
							FROM `fee_structure_mst`
							WHERE class_id = '$class_id' ";
					$res = mysqli_query($conn, $sql);

					if(mysqli_num_rows($res) > 0){
						while($row = mysqli_fetch_assoc($res)){
							$tuition_fee = $row['tuition_fee'];
							$exam_fee = $row['exam_fee'];
							$lab_fee = $row['lab_fee'];
							$sports_fee = $row['sports_fee'];
							$total_fee = $row['total_fee'];

							$output .= "
								<table class='table table-bordered'>
									<tr>
										<th colspan='2' class='text-center bg-primary'>Fee Receipt</th>
									</tr>
									<tr>
										<th>Student Name:</th>
										<td>$student_name</td>
									</tr>
									<tr>
										<th>Roll No:</th>
										<td>$student_id</td>
									</tr>
									<tr>
										<th>Class Name:</th>
										<td>$class_name</td>
									</tr>
									<tr>
										<th>Tuition Fee</th>
										<td>&#x20b9; $tuition_fee</td>
										<input type='hidden' name='tuition_fee' value='$tuition_fee'>
									</tr>
									<tr>
										<th>Exam Fee</th>
										<td>&#x20b9; $exam_fee</td>
										<input type='hidden' name='exam_fee' value='$exam_fee'>
									</tr>
									<tr>
										<th>Lab Fee</th>
										<td>&#x20b9; $lab_fee</td>
										<input type='hidden' name='lab_fee' value='$lab_fee'>
									</tr>
									<tr>
										<th>Sports Fee</th>
										<td>&#x20b9; $sports_fee</td>
										<input type='hidden' name='sports_fee' value='$sports_fee'>
									</tr>
									<tr>
										<th>Total Fee</th>
										<th>&#x20b9; $total_fee</th>
										<input type='hidden' name='total_fee' value='$total_fee'>
									</tr>
								</table>
							";

						}
					}else{
						$output .= "
							<div class='well text-warning bg-warning'>
								Fees Structure Not Found For Your Class,<br>
								Kindly contact your admin.
							</div>
						";
					}		
		}

		echo $output;
	}else{
		echo "";
	}
?>