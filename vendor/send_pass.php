<?php
	require_once('../db_connection.php');
	$email = $_POST['email'];
	echo $email;

	$sql = "SELECT * 
			FROM  `student_mst` 
			WHERE email = '$email'";
	$res = mysqli_query($conn, $sql);

	if(mysqli_num_rows($res) > 0){
		$student = mysqli_fetch_assoc($res);
		//student info
		$pass = $student['password'];
		$name = $student['fname'];
		//mail details
		$to = $student['email'];
		$from = 'patelsafan99@gmail.com';
		$subject = "EduRead Password Info!";
		//message
		$message = "Dear $name,"."\r\n"."Your Password is: $pass"."\r\n\t"."From Iqra Admin Desk";

		//headers
		$headers = "MIME-Version: 1.0"."\r\n";
		$headers .= "From: <patelsafan99@gmail.com>"."\r\n";

		$isSent = mail($to, $subject, $message, $headers);
	}else{
		echo "email not found";
	}

?>