<?php
	session_start();
	//check if session is set or not
	//if set, redirect to home page.
	//else redirect to login page
	
	if(isset($_SESSION["student_id"])){
		header("location:home.php");
	}else{
		header("location:login.php");
	}
	
?>