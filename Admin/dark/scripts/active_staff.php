<?php
	
	session_start();

	require_once("db_connection.php");
	//checking if admin already logged in or not 
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:login.php");
	}
	//getting staff_id from queryString
	$staff_id = $_GET["id"];
	//getting records from table for given staff_id.
	$sql = "SELECT * FROM staff_mst WHERE staff_id='$staff_id'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);


		//activate the staff account.
		$active = "true";
		$sql = "UPDATE staff_mst 
				SET `isactive` = '$active' 
				WHERE `staff_id` = '$staff_id' ";

		$res = mysqli_query($conn, $sql);
		if($res){
			header("Location:../all_professors.php");	
		}else{
			echo "Some Error Occured!";
		}
		
	}else{
		echo "No Records Found!";
		header("Location:../all_professors.php");
	}


?>