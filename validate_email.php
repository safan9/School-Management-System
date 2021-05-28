<?php
	require_once("db_connection.php");
	
	$errEmpty = false;
	$errEmail = false;
	$errEmailExist = false;
	$output = '';
	$email = $_POST["email"];


	if(empty($email)){
		$output .= "<span>* Enter Email Address!</span>";
		$errEmpty = true;
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$output .= "<span>* Enter Valid Email Address!</span>";
		$errEmail = true;
	}
	
	if(!$errEmpty && !$errEmail){
		$sql = "SELECT * FROM student_mst WHERE email = '$email'";
		$res = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($res) > 0){
			$output .= "<span>* Email Already Registered!</span>";
			$errEmailExist = true;
		}
		
	}

	echo $output;
?>
<script>
	var errEmpty = "<?php echo $errEmpty; ?>";
	var errEmail = "<?php echo $errEmail; ?>";
	var errEmailExist = "<?php echo $errEmailExist; ?>";
	
	if(errEmpty == true || errEmail == true || errEmailExist == true){
		$("#email").addClass("error");
	}
	
	if(errEmpty == false && errEmail == false && errEmailExist == false){
		$("#err_email").val("");
	}
	
</script>