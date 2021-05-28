<?php
	session_start();

	require_once("db_connection.php");
	//checking if admin already logged in or not 
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:login.php");
	}

	if(isset($_POST['btn-add-structure'])){

		$tuition_fee = $_POST['tuition_fee'];
		$exam_fee = $_POST['exam_fee'];
		$lab_fee = $_POST['lab_fee'];
		$sports_fee = $_POST['sports_fee'];
		$class_id = $_POST['class_name'];

		$totalFee = $tuition_fee + $exam_fee + $lab_fee + $sports_fee;

		//echo $totalFee."<br>".$class_id;
		$sql = "INSERT INTO `fee_structure_mst` (
				`fs_id` ,
				`tuition_fee` ,
				`exam_fee` ,
				`lab_fee` ,
				`sports_fee` ,
				`total_fee` ,
				`class_id`
				)
				VALUES(NULL, '$tuition_fee', '$exam_fee', '$lab_fee', '$sports_fee', '$totalFee', '$class_id') ";

		$res = mysqli_query($conn, $sql);
		if($res){

			echo "<script>alert('Fee Structure Added Successfully');</script>";
			header("Location:../add_fee_structure.php");
		}else{

			echo "<script>alert('Fail to Add  Fee Structure');</script>";
			header("Location:../add_fee_structure.php");
		}
	}else{
		header("Location:../add_fee_structure.php");
	}
?>