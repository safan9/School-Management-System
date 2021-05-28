<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	if(isset($_POST["btn-submit"])){

		$fname = mysql_escape_string($_POST["first_name"]);
		$mname = mysql_escape_string($_POST["middle_name"]);
		$lname = mysql_escape_string($_POST["last_name"]);
		$gender = $_POST["gender"];
		$designation = mysql_escape_string($_POST["designation"]);
		$qualification = mysql_escape_string($_POST["qualification"]);
		$experience = mysql_escape_string($_POST["experience"]);
		$address = mysql_escape_string($_POST["address"]);
		$mobile_no = $_POST["number"];
		$email = $_POST["email"];
		$salary = $_POST["salary"];
		$dob = $_POST["dob"];
		$doj = $_POST["doj"];
		$password = $_POST["password"];
		$status = "false";

		//image upload
		$file_name = $_FILES['photo']['name'];
    	$file_size =$_FILES['photo']['size'];
    	$file_tmp =$_FILES['photo']['tmp_name'];
    	$file_type=$_FILES['photo']['type'];
		$photo_path = "uploads/".$file_name;
		
	 	$sql = "INSERT INTO staff_mst(
	 	`staff_id` ,
	 	`first_name` ,
	 	`middle_name` ,
	 	`last_name` ,
	 	`gender` ,
	 	`designation` ,
	 	`qualification` ,
	 	`past_experience` ,
	 	`address`,
	 	`mobile_no` ,
	 	`email` ,
	 	`password`,
	 	`salary` ,
	 	`doj` ,
	 	`dob` ,
	 	`isactive` ,
	 	`photo` 
	 	) VALUES(
	 	 NULL, '$fname', '$mname', '$lname', '$gender', '$designation', '$qualification', '$experience', '$address', '$mobile_no', '$email', '$password','$salary', '$doj', '$dob', '$status', '$photo_path'
	 	)";

	 	$res = mysqli_query($conn, $sql);
		if($res){
			
			//moving image to server dir
	 		move_uploaded_file($file_tmp, $photo_path);

			echo "<script>alert('Staff Added Successfully');</script>";
			header("Location:../add_professor_bootstrap.php");
		}else{
			echo "<script>alert('Fail to Register');</script>";
			header("Location:../add_professor_bootstrap.php");
		}
	}

?>