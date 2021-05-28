<?php
	require_once "../db_connection.php" ;
	
	//storing values from textboxes
	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname =  $_POST["lname"] ;
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$birthplace =  $_POST["birthplace"] ;
	$address =  $_POST["address"] ;
	$city_id = $_POST["city"];
	$blood_group =  $_POST["blood_group"] ;
	$mobile_no =  $_POST["mobile_no"] ;
	$nationality =  $_POST["nationality"] ;
	$cast_id = $_POST["cast"];
	$class_id = $_POST["class"];
	$division_id = $_POST["division"];
	$email =  $_POST["email"] ;
	$password =  $_POST["password"] ;
	$isactive = "false";
	$grno = 6;
	$dor = date('Y-m-d H:m:s');
	
	//image upload
	$file_name = $_FILES['photo']['name'];
    $file_size =$_FILES['photo']['size'];
    $file_tmp =$_FILES['photo']['tmp_name'];
    $file_type=$_FILES['photo']['type'];
	$photo_path = "uploads/".$file_name;
	//moving image to server dir
	 move_uploaded_file($file_tmp, $photo_path);
     
		
	$sql="INSERT INTO `student_mst` (
`student_id` ,
`fname` ,
`mname` ,
`lname` ,
`email`,
`gender` ,
`dob` ,
`birth_place` ,
`address` ,
`city_id` ,
`dor` ,
`blood_group` ,
`mobile_no` ,
`nationality` ,
`cast_id` ,
`isactive` ,
`photo` ,
`class_id` ,
`division_id` ,
`password`
)
VALUES (
NULL ,  '$fname',  '$mname',  '$lname', '$email', '$gender',  '$dob',  '$birthplace',  '$address',  '$city_id',  '$dor',  '$blood_group',  '$mobile_no',  '$nationality',  '$cast_id',  '$isactive',  '$photo_path',  '$class_id',  '$division_id',  '$password')";
	$res = mysqli_query($conn, $sql);
	if($res){
		header("location:../login.php");
	}else{
		?>
			<script>alert("Fail to register".mysqli_errno);</script>

		<?php
		header("location:../login.php");
	}
?>