<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	//getting student_id from queryString
	$student_id = $_GET["id"];

	$sql = "SELECT * FROM student_mst WHERE student_id = '$student_id' ";
	$res = mysqli_query($conn, $sql);
	$row = "";
	if(mysqli_num_rows($res) > 0){
		$row = mysqli_fetch_assoc($res);
	}

	if(isset($_POST["btn-submit"])){

		$fname = $_POST["first_name"];
		$mname = $_POST["middle_name"];
		$lname =  $_POST["last_name"] ;
		$gender = $_POST["gender"];
		$dob = $_POST["dob"];
		$birthplace =  $_POST["birthplace"] ;
		$address =  $_POST["address"] ;
		$city_id = $_POST["city"];
		$blood_group =  $_POST["blood_group"] ;
		$mobile_no =  $_POST["number"] ;
		$nationality =  $_POST["nationality"] ;
		$cast_id = $_POST["cast"];
		$class_id = $_POST["class"];
		$division_id = $_POST["division"];
		$email =  $_POST["email"] ;

		//image upload
		$file_name = $_FILES['photo']['name'];
    	$file_size =$_FILES['photo']['size'];
    	$file_tmp =$_FILES['photo']['tmp_name'];
    	$file_type=$_FILES['photo']['type'];

		$photo_path = "uploads/".$file_name;
		$path = "../vendor/".$photo_path;

		if(!empty($file_name)){
			$photo_path = "uploads/".$file_name;
			$path = "../../vendor/".$photo_path;
		}
		else{
			$photo_path = $row['photo'];
			$path = "../../vendor/".$photo_path;
		}
		
		
		$sql="UPDATE `student_mst` 
			  SET  	`fname` = '$fname' ,
			  		`mname` = '$mname' ,
					`lname` = '$lname' ,
					`email` = '$email' ,
					`gender` = '$gender' ,
					`dob` = '$dob' ,
					`birth_place` = '$birthplace' ,
					`address` = '$address' ,
					`city_id` = '$city_id' ,
					`blood_group` = '$blood_group' ,
					`mobile_no` = '$mobile_no' ,
					`nationality` = '$nationality' ,
					`cast_id` = '$cast_id' ,
					`photo` = '$photo_path' ,
					`class_id`  = '$class_id' ,
					`division_id` = '$division_id' 
				WHERE `student_id` = '$student_id' ";

		$res = mysqli_query($conn, $sql);

		if($res){

			//moving image to server dir
	 		move_uploaded_file($file_tmp, $path);

			echo "<script>alert('Student Updated Successfully');</script>";
			header("Location:../all_students.php");
		}else{
			echo "<script>alert('Fail to Register');</script>";
			header("Location:../all_students.php");
		}
	}
?>
