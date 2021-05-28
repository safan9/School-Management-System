<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting staff_id from queryString
	$staff_id = $_GET["id"];

	$sql = "SELECT * FROM staff_mst WHERE staff_id = '$staff_id' ";
	$res = mysqli_query($conn, $sql);
	$row = "";
	if(mysqli_num_rows($res) > 0){
		$row = mysqli_fetch_assoc($res);
	}

	if(isset($_POST["btn-submit"])){

		$fname = $_POST["first_name"];
		$mname = $_POST["middle_name"];
		$lname = $_POST["last_name"];
		$gender = $_POST["gender"];
		$designation = $_POST["designation"];
		$qualification = $_POST["qualification"];
		$experience = $_POST["experience"];
		$address = $_POST["address"];
		$mobile_no = $_POST["number"];
		$email = $_POST["email"];
		$salary = $_POST["salary"];
		$dob = $_POST["dob"];
		$doj = $_POST["doj"];

		$file_name = $_FILES['photo']['name'];
    	$file_size =$_FILES['photo']['size'];
    	$file_tmp =$_FILES['photo']['tmp_name'];
   		$file_type=$_FILES['photo']['type'];
		$photo_path = '';

		if(!empty($file_name)){
			//image upload
			$photo_path = "uploads/".$file_name;
		}
		else{
			$photo_path = $row['photo'];
		}
		

		$sql = "
			UPDATE staff_mst
			SET `first_name` = '$fname',
				`middle_name` = '$mname',
				`last_name` = '$lname',
				`gender` = '$gender',
				`designation` = '$designation',
				`qualification` = '$qualification',
				`past_experience` = '$experience',
				`address` = '$address',
				`mobile_no` = '$mobile_no',
				`email` = '$email',
				`salary` = '$salary',
				`dob` = '$dob',
				`doj` = '$doj',
				`photo` = '$photo_path'
			WHERE `staff_id` = '$staff_id' ";

		$res = mysqli_query($conn, $sql);

		if($res){

			//moving image to server dir
	 		move_uploaded_file($file_tmp, $photo_path);

			echo "<script>alert('Staff Added Successfully');</script>";
			header("Location:../all_professors.php");
		}else{
			echo "<script>alert('Fail to Register');</script>";
			header("Location:../all_professors.php");
		}
	}
?>
