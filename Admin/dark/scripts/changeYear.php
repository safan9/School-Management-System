<?php
	session_start();
	require_once("db_connection.php");
	//checking if session variable for admin is set or not.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:../login.php");
	}


		$year_id = $_GET["id"];
		//echo $year_id;
		$sql = "UPDATE academin_year_mst
				SET `status` = 'inactive'";
		$res = mysqli_query($conn, $sql);

		if($res){
			$sql = "UPDATE academin_year_mst
					SET `status` = 'active'
					WHERE `year_id` = '$year_id'";
			$result = mysqli_query($conn, $sql);
			
			if($result){
				echo "<script>alert('Year Changed Successfully');</script>";
				header("Location:../academic_year.php");
			}else{
				echo "<script>alert('Fail to Change Year');</script>";
				header("Location:../academic_year.php");
			}
		}


	
?>