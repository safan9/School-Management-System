<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	
	if(!isset($_SESSION["staff_id"])){
		header("Location:login.php");
	}
	//fetching data from session
	$class_id = $_SESSION['class_id'];
	$output = "";

	$student_id = $_GET['id'];
	if($student_id != '0'){

		$sql = "SELECT *
				FROM `student_mst`
				WHERE student_id = $student_id";
		$res = mysqli_query($conn, $sql);

		if(mysqli_num_rows($res) > 0){
			$student = mysqli_fetch_assoc($res);
		}
		$student_name = $student['fname']." ".$student['lname'];
		$division_id = $student['division_id'];

		$sql = "SELECT *
				FROM `fees_mst`
				WHERE student_id = $student_id AND division_id = $division_id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){


			$sql = "
				SELECT fees_mst. * , division_mst.division_name, student_mst . * 
				FROM fees_mst
				INNER JOIN division_mst ON fees_mst.division_id = division_mst.division_id
				INNER JOIN student_mst ON fees_mst.student_id = student_mst.student_id
				WHERE fees_mst.student_id = $student_id";
			$res = mysqli_query($conn, $sql);

			if(mysqli_num_rows($res) > 0){
				while($result = mysqli_fetch_assoc($res)){
					$class_name = $result['division_name'];
					$fees_date = $result['date'];
					$tuition_fee = $result['tuition_fee'];
					$exam_fee = $result['exam_fee'];
					$lab_fee = $result['lab_fee'];
					$sports_fee = $result['sports_fee'];
					$total_fee = $result['total_fee'];
				}
			}
		
			$output .= "
				<table class='table table-bordered'>
									<tr>
										<th colspan='2' class='text-center bg-primary'>Iqra Higher Secondary School<br/>Fee Receipt</th>
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
										<th>Fee Type:</th>
										<td>Annual</td>
									</tr>
									<tr>
										<th>Tuition Fee</th>
										<td>&#x20b9; $tuition_fee</td>
										
									</tr>
									<tr>
										<th>Exam Fee</th>
										<td>&#x20b9; $exam_fee</td>
									
									</tr>
									<tr>
										<th>Lab Fee</th>
										<td>&#x20b9; $lab_fee</td>
										
									</tr>
									<tr>
										<th>Sports Fee</th>
										<td>&#x20b9; $sports_fee</td>
										
									</tr>
									<tr>
										<th>Total Fee</th>
										<th>&#x20b9; $total_fee</th>
									</tr>
									</table>
								<button class='btn btn-primary' name='btn-print' onclick='window.print();'>
									Print
								</button>
					
					<a class='btn btn-warning' href='view_fees.php'>Go Back</a>";

			
				
		}else{

			$output .= "
				<div class='well text-warning bg-warning'>
					Fees Not Added Yet!
				</div>
			";
		}

		//echo $output;
	}else{
		echo "";
	}
ob_start();
?>
<html>
<head>
	<title>Download Result</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
</head>
<body>
	<div class='container'>
		<?php echo $output; ?>
	</div>
</body>
</html>
