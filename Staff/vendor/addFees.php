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
		$tuition_fee = $_POST['tuition_fee'];
		$exam_fee = $_POST['exam_fee'];
		$lab_fee = $_POST['lab_fee'];
		$sports_fee = $_POST['sports_fee'];
		$total_fee = $_POST['total_fee'];
		$date = date("Y-m-d");


		//getting students division id.
		$division_id = $_SESSION['division_id'];
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

		
	
		if(!empty($student_id) && !empty($academic_year) && !empty($division_id) && !empty($total_fee)){
					$sql = "
						INSERT INTO `fees_mst`(
						`fee_id`, 
						`student_id`, 
						`division_id`, 
						`academic_year_id`, 
						`date`, 
						`tuition_fee`, 
						`exam_fee`, 
						`lab_fee`,
						`sports_fee`,
						`total_fee`)
						VALUES (NULL, '$student_id', '$division_id', '$academic_year', '$date', 
								'$tuition_fee', '$exam_fee', '$lab_fee', '$sports_fee', '$total_fee')";
					$result = mysqli_query($conn, $sql);

				
						if($result){
							echo "fees added successfully";
							header("Location:../view_fees.php");
						}else{
							echo "Something went wrong";
							die($result);
						}
		}else{
			echo "Please enter all details";
			header("Location:../view_fees.php");
		}
	}else{
		echo "illigal access";
		header("Location:../view_fees.php");
	}
?>