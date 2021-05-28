<?php
	$conn = mysqli_connect("localhost", "root", "", "pro_sms");
	if(!$conn){
		alert("DB connection error");
	}
?>