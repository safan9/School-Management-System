<?php
	session_start();
	require_once("db_connection.php");

		$username = $_POST["username"];
		$password = $_POST["password"];

		if(empty($username) || empty($password)){
			echo "<b>Please Enter Login Details!</b>";
		}else{
			$sql = "SELECT * FROM admin_mst WHERE username = '$username' AND password = '$password'";
			$res = mysqli_query($conn, $sql);
			echo mysqli_num_rows($res);
			if(mysqli_num_rows($res) == 1){
				$record = mysqli_fetch_assoc($res);
				//setting session variables
				$_SESSION["admin_id"] = $record["admin_id"];
				$_SESSION["username"] = $record["username"];

				echo "redirect";
			}else{
				echo "<b>Incorrect Login Details!!</b>";
			}
		}


?>