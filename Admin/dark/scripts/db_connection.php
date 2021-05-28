<?php
	$conn = mysqli_connect("localhost", "root", "", "pro_sms");
	if(!$conn){
		echo "error in db connection";
		exit;
	}
?>