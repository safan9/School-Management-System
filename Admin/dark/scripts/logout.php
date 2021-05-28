<?php
	//logout.php
	session_start();
	if(isset($_SESSION["admin_id"]) && isset($_SESSION["username"])){
		//unsetting the session variables.
		unset($_SESSION["admin_id"]);
		unset($_SESSION["username"]);
		//destroying sessions.
		session_destroy();
		header("Location:../login.php");

	}
?>