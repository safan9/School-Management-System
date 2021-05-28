<?php
//load_division.php

	require_once("scripts/db_connection.php");
	
	$output = '';
	if(isset($_POST["class_id"])){
		if($_POST["class_id"] != ''){
			$sql = "SELECT * FROM division_mst WHERE class_id= '".$_POST["class_id"]."'";
		}
		else{
			$sql = "SELECT * FROM division_mst";
		}
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			$div_id = $row["division_id"];
			$div_name = $row["division_name"];
			$output .= "<option value=$div_id>$div_name</option>";
		}
	}
	echo $output;
?>