<?php
//load_division.php

	require_once("scripts/db_connection.php");
	
	$output = '<option value="0">--SELECT SUBJECT--</option>';
	if(isset($_POST["class_id"])){
		if($_POST["class_id"] != ''){
			$sql = "SELECT * FROM subject_mst WHERE class_id= '".$_POST["class_id"]."'";
		}
		else{
			$sql = "SELECT * FROM subject_mst";
		}
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			$subject_id = $row["subject_id"];
			$subject_name = $row["subject_name"];
			$output .= "<option value=$subject_id>$subject_name</option>";
		}
	}
	echo $output;
?>