<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}

	if(isset($_POST["btn_add_year"])){
		$year = $_POST["year"];
		$start_date = $_POST["start_date"];
		$end_date = $_POST["end_date"];
		$status = 'inactive';

		//echo $year."<br>".$start_date."<br>".$end_date."<br>".$status;

		$sql = "INSERT INTO `academin_year_mst` (
				`year_id` , `year` , `start_date` , `end_date` ,`status`)
				VALUES( NULL, '$year', '$start_date', '$end_date', '$status')";
		$result = mysqli_query($conn, $sql);

		if($result){
			echo "<script>alert('Year Added Successfully');</script>";
			header("Location:../academic_year.php");
		}else{
			echo "<script>alert('Fail to Add Year');</script>";
			header("Location:../academic_year.php");
		}

	}
?>