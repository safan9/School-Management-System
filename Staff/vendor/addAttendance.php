<?php
	//checking if user already logged in.
	session_start();
	require_once('../db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}
	//fetching data from session
	$class_id = $_SESSION['class_id'];
	if(isset($_POST["btn-add"])){
		//fetching form data
		$student_id = $_POST['students'];
		$division_id = $_POST['division_id'];
		$month_id = $_POST['months'];
		$present = $_POST['present_days'];
		$absent = $_POST['absent_days'];
		$date = date("Y-m-d");

		//getting current academic year
		$academic_year = '';
		$sql = "SELECT *
				FROM `academin_year_mst`
				WHERE status = 'active'";
		$res = mysqli_query($conn, $sql);
		if(mysqli_num_rows($res) > 0){
			$row = mysqli_fetch_assoc($res);
			$academic_year = $row['year_id'];
		}

		echo $student_id."<br>".$division_id."<br>".$present."<br>".$absent."<br>".$month_id;

	
		if(!empty($student_id) && !empty($month_id) && !empty($academic_year) && !empty($division_id)){
					$sql = "
						INSERT INTO attendance_mst(`attendance_id`, `student_id`, `division_id`, `month_id`, `academic_year_id`, `entry_date`, `present_days`, `absent_days`)
						VALUES(NULL, '$student_id', '$division_id', '$month_id', '$academic_year', '$date', '$present', '$absent')";
					$result = mysqli_query($conn, $sql);

				
						if($result){
							echo "attendance added successfully";
							header("Location:../view_attendance.php");
						}else{
							echo "Something went wrong";
							die($result);
						}
					
				
			
		}else{
			echo "Please enter all details";
		}
	}else{
		echo "illigal access";
	}
?>