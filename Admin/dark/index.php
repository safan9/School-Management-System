<?php
	session_start();
	//checking if admin is already logged in.
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:login.php");
	}else{
		header("Location:home.php");
	}
?>