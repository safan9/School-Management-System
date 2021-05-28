<?php
	//checking if user already logged in
	session_start();
	if(isset($_SESSION["student_id"])){
		header("Location:home.php");
	}
	
	require_once("db_connection.php");
	function fill_division($conn){
		$sql = "SELECT * FROM division_mst";
		$res_div = mysqli_query($conn, $sql);							
		while($div = mysqli_fetch_assoc($res_div)){
		?>
			<option value=<?php echo $div["division_id"];?> ><?php echo $div["division_name"];?></option>
		<?php
		}
	}
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="EduRead - Education HTML5 Template">
	<meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EduRead - Education HTML5 Template</title> 
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     
	<!-- Popup -->
	<link href="css/assets/magnific-popup.css" rel="stylesheet"> 
	<!-- Slick Slider -->
	<link href="css/assets/slick.css" rel="stylesheet"> 	
	<link href="css/assets/slick-theme.css" rel="stylesheet"> 	   
	<!-- owl carousel -->
	<link href="css/assets/owl.carousel.css" rel="stylesheet">
	<link href="css/assets/owl.theme.css" rel="stylesheet">
	<!-- Main Menu-->
	<link rel="stylesheet" href="css/assets/meanmenu.css">   
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">	
	<!-- jQuery and Ajax-->
	
	<script src="js/vendor/jquery.js"></script>

	<style>
		.error{
			border: 1px solid red;
		}
	</style>
	
	</head>
<body class="register">
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header id="header">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12 header-top-left">
					<ul class="list-unstyled">
						<li><i class="fa fa-phone top-icon"></i> +123 456 789</li>
						<li><i class="fa fa-envelope top-icon"></i> hello@eduread.com</li>
					</ul>
				</div>
				<div class="col-sm-6 col-xs-12 header-top-right">
					<ul class="list-unstyled">
						<li><a href="register.php"><i class="fa fa-user-plus top-icon"></i> Sing up</a></li>
						<li><a href="login.php"><i class="fa fa-lock top-icon"></i>Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- Ends: .header-top -->

	<div class="header-body">
		<nav class="navbar edu-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand  data-scroll"><img src="images/logo.png" alt=""><span>IQRA</span></a>
				</div>

				<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="login.php">Login</a></li>
					<li class="active" ><a href="register.php">Register</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Register now</h1>
						<p><span><a href="#">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> Register</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->


<!-- Register Area section -->
<section class="register-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<form action="vendor/register_user.php" onsubmit="return validate()" method="post" class="learnpro-register-form" enctype="multipart/form-data">
					<p class="lead">Register New Account</p>
					<div class="form-group">
						&nbsp;<label for="fname" >Enter First Name</label>
					 	<input autocomplete="off" name="fname" id="fname" class="form-control" placeholder="First Name" type="text">
						<div id="err_fname" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="mname" >Enter Middle Name</label>
					 	<input autocomplete="off" name="mname" id="mname" class="form-control" placeholder="Middle Name" type="text">
						<div id="err_mname" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="lname" >Enter Last Name</label>
					 	<input autocomplete="off" name="lname" id="lname" class="form-control" placeholder="Last Name" type="text">
						<div id="err_lname" class="text-danger"></div>
					</div>						
					<div class="form-group"> 
					  	&nbsp;&nbsp;<label for="gender">Select Gender</label><br/>&nbsp;
						<input type="radio" name="gender" value="Male" checked>&nbsp;Male&nbsp;
						<input type="radio" name="gender" value="Female">&nbsp;Female&nbsp;
						<input type="radio" name="gender" value="Other">&nbsp;Other
					</div>
					<div class="form-group">
					  &nbsp;<label for="dob" >Select Birthdate</label>
					  <input class="required form-control" name="dob" id="dob" type="date">
					</div>
					<div class="form-group">
						&nbsp;<label for="birthplace" >Enter Birthplace</label>
					 	<input autocomplete="off" class="form-control" name="birthplace" id="birthplace" placeholder="Birth Place" type="text">
						<div id="err_birthplace" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="address" >Enter Address</label>
					 	<input autocomplete="off" name="address" id="address" class="form-control" placeholder="address" type="text">
						<div id="err_address" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="city" >Select City</label>
					 	<select name="city" id="city" class="form-control">
							<?php 
								$sql = "SELECT * FROM city_mst";
								$res_cities = mysqli_query($conn, $sql);
								
								while($city = mysqli_fetch_assoc($res_cities)){
								?>
									<option value=<?php echo $city["city_id"];?> ><?php echo $city["city_name"];?></option>
								<?php
								}
							?>
							<!-- *Fetching cities from DB. *-->
						</select>
					</div>
					<div class="form-group">
						&nbsp;<label for="blood_group" >Enter Blood Group</label>
					 	<input autocomplete="off" name="blood_group" id="blood_group" class="form-control" placeholder="Blood Group" type="text">
						<div id="err_blood_group" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="mobile_no" >Enter Mobile Number</label>
					 	<input autocomplete="off" name="mobile_no" id="mobile_no" class="form-control" placeholder="Mobile No" type="text">
						<div id="err_mobile_no" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="nationality" >Enter Nationality</label>
					 	<input autocomplete="off" name="nationality" id="nationality" class="form-control" placeholder="Nationality" type="text">
						<div id="err_nationality" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="cast" >Select Cast</label>
					 	<select name="cast" id="cast" class="form-control">
							<?php 
								$sql = "SELECT * FROM cast_mst";
								$res_casts = mysqli_query($conn, $sql);
								
								while($cast = mysqli_fetch_assoc($res_casts)){
								?>
									<option value=<?php echo $cast["cast_id"];?> ><?php echo $cast["cast_name"];?></option>
								<?php
								}
							?>
							<!-- *Fetching casts from DB. *-->
						</select>
					</div>
					<div class="form-group">
						&nbsp;<label for="class" >Select Class</label>
					 	<select name="class" id="class" class="form-control">
							<?php 
								$sql = "SELECT * FROM class_mst";
								$res_classes = mysqli_query($conn, $sql);
								
								while($class = mysqli_fetch_assoc($res_classes)){
								?>
									<option value=<?php echo $class["class_id"];?> ><?php echo $class["class_name"];?></option>
								<?php
								}
							?>
							<!-- * Fetch classes from DB. *-->
						</select>
					</div>
					<div class="form-group">
						&nbsp;<label for="division" >Select Division</label>
					 	<select name="division" id="division" class="form-control">
							<?php 
								echo fill_division($conn);
							?>
							<!-- * Fetch divion related to class from DB. *-->
						</select>
					</div>
					<div class="form-group">
						&nbsp;<label for="email" >Enter E-Mail</label>
					 	<input class="required form-control" id="email" name="email" placeholder="Email" type="email">
						<div id="err_email" class="text-danger"></div>
					</div>	
					<div class="form-group">
						&nbsp;<label for="password" >Enter Password</label>
					 	<input class="required form-control" id="password" name="password" placeholder="Password" type="password">
						<div id="err_password" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="confirm_password" >Confirm Password</label>
					 	<input class="required form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password">
						<div id="err_confirm_password" class="text-danger"></div>
					</div>
					<div class="form-group">
						&nbsp;<label for="photo" >Upload Photo</label>
					 	<input class="required form-control" id="photo" name="photo" placeholder="Upload Photo" type="file">
					</div>

					<div class="form-group register-btn">
					 	<input type="submit" class="btn btn-primary btn-lg" id="btnsubmit" name="btnsubmit" value="Register" />
					</div>			
				</form>
			</div>												
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->
<!-- * ajax request for class and division dropdowns *-->
<script type="text/javascript">
	$(document).ready(function(){
		$("#class").change(function(){
			var class_id = $(this).val();
			//alert("ok");
			$.ajax({
				url: "load_division.php",
				method: "POST",
				dataType: "html", 
				data: {class_id:class_id},
				success: function(data){
					$("#division").html(data);
					//alert(data);
				}
			});
		});
		
		//email checking.
		$("#email").focusout(function(){
			var email = $("#email").val();
			$.ajax({
				url: "validate_email.php",
				method: "POST",
				dataType: "html", 
				data: {email:email},
				success: function(data){
					$("#err_email").html(data);
					//alert(data);
				}
			});
			//alert("focusOut");
		});
	});
</script>
<!-- ** Form Validation **-->
<script type="text/javascript">

	
	function validate(){
		//selecting textboxes
		var fname = document.getElementById("fname");
		var mname = document.getElementById("mname");
		var lname = document.getElementById("lname");
		var birthplace = document.getElementById("birthplace");
		var address = document.getElementById("address");
		var blood_group = document.getElementById("blood_group");
		var mobile_no = document.getElementById("mobile_no");
		var nationality = document.getElementById("nationality");
		var email = document.getElementById("email");
		var password = document.getElementById("password");
		var confirm_password = document.getElementById("confirm_password");
		
		//selecting error fields
		var err_fname = document.getElementById("err_fname");
		var err_mname = document.getElementById("err_mname");
		var err_lname = document.getElementById("err_lname");
		var err_birthplace = document.getElementById("err_birthplace");
		var err_address = document.getElementById("err_address");
		var err_blood_group = document.getElementById("err_blood_group");
		var err_mobile_no = document.getElementById("err_mobile_no");
		var err_nationality = document.getElementById("err_nationality");
		var err_password = document.getElementById("err_password");
		var err_confirm_password = document.getElementById("err_confirm_password");
		var err_email = document.getElementById("err_email");
		
		//Assigning event listeners
		fname.addEventListener("blur", fnameVerify, true);
		mname.addEventListener("blur", mnameVerify, true);
		lname.addEventListener("blur", lnameVerify, true);
		birthplace.addEventListener("blur", birthplaceVerify, true);
		address.addEventListener("blur", addressVerify, true);
		blood_group.addEventListener("blur", bloodgroupVerify, true);
		mobile_no.addEventListener("blur", mobilenoVerify, true);
		nationality.addEventListener("blur", nationalityVerify, true);
		password.addEventListener("blur", passwordVerify, true);
		confirm_password.addEventListener("blur", confirm_passwordVerify, true);
		//email.addEventListener("blur", emailVerify, true);
		
		//checking for empty fields
		if(fname.value == ""){
			err_fname.textContent = "* First Name is Required!"
			fname.style.border = "1px solid red";
			fname.focus();
			return false;
		}else
		if(mname.value == ""){
			err_mname.textContent = "* Middle Name is Required!"
			mname.style.border = "1px solid red";
			mname.focus();
			return false;
		}else
		if(lname.value == ""){
			err_lname.textContent = "* Last Name is Required!"
			lname.style.border = "1px solid red";
			lname.focus();
			return false;
		}else
		if(birthplace.value == ""){
			err_birthplace.textContent = "* Birthplace is Required!"
			birthplace.style.border = "1px solid red";
			birthplace.focus();
			return false;
		}else
		if(address.value == ""){
			err_address.textContent = "* Address is Required!"
			address.style.border = "1px solid red";
			address.focus();
			return false;
		}else
		if(blood_group.value == ""){
			err_blood_group.textContent = "* Blood Group is Required!"
			blood_group.style.border = "1px solid red";
			blood_group.focus();
			return false;
		}else
		if(mobile_no.value == ""){
			err_mobile_no.textContent = "* Mobile Number is Required!"
			mobile_no.style.border = "1px solid red";
			mobile_no.focus();
			return false;
		}else
		if(mobile_no.length > 10){
				err_mobile_no.textContent = "* Enter Valid Mobile Number!";
				mobile_no.style.border = "1px solid red";
				mobile_no.focus();
				return false;
				
		}else
		if(nationality.value == ""){
			err_nationality.textContent = "* Nationality is Required!"
			nationality.style.border = "1px solid red";
			nationality.focus();
			return false;
		}else
		if(password.value == "" password.value < 9){
			err_password.textContent = "* Password Must Be 8 character long!"
			password.style.border = "1px solid red";
			password.focus();
			return false;
		}else
		if(confirm_password.value == "" || confirm_password.value != password.value){
			err_confirm_password.textContent = "* Confirm Password Does Not Match!"
			confirm_password.style.border = "1px solid red";
			confirm_password.focus();
			return false;
		}
		
		//Event Handlers
		function fnameVerify(){
			if(fname.value != ""){
				fname.style.border = "1px solid #5e6e66";
				err_fname.textContent = "";
				return true;
			}
		}
		
		function mnameVerify(){
			if(mname.value != ""){
				mname.style.border = "1px solid #5e6e66";
				err_mname.textContent = "";
				return true;
			}
		}
		
		function lnameVerify(){
			if(lname.value != ""){
				lname.style.border = "1px solid #5e6e66";
				err_lname.textContent = "";
				return true;
			}
		}
		
		function birthplaceVerify(){
			if(birthplace.value != ""){
				birthplace.style.border = "1px solid #5e6e66";
				err_birthplace.textContent = " ";
				return true;
			}
		}
		
		function addressVerify(){
			if(address.value != ""){
				address.style.border = "1px solid #5e6e66";
				err_address.textContent = "";
				return true;
			}
		}
		
		function bloodgroupVerify(){
			if(blood_group.value != ""){
				blood_group.style.border = "1px solid #5e6e66";
				err_blood_group.textContent = "";
				return true;
			}
		}
		
		function mobilenoVerify(){
			if(mobile_no.value != ""){
				mobile_no.style.border = "1px solid #5e6e66";
				err_mobile_no.textContent = "";
				return true;
			}
		
		}
		
		function nationalityVerify(){
			if(nationality.value != ""){
				nationality.style.border = "1px solid #5e6e66";
				err_nationality.textContent = "";
				return true;
			}
		}
		
		function passwordVerify(){
			if(password.value != ""){
				password.style.border = "1px solid #5e6e66";
				err_password.textContent = "";
				return true;
			}
		}
		
		function confirm_passwordVerify(){
			if(confirm_password.value != ""){
				confirm_password.style.border = "1px solid #5e6e66";
				err_confirm_password.textContent = "";
				return true;
			}
		}
		
		function emailVerify(){
			if(email.value != ""){
				email.style.border = "1px solid #5e6e66";
				err_email.textContent = "";
				return true;
			}
		}
	}
</script>
<!--** Form Validation Ends-->

<!-- Footer Area section -->
<footer>

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-inner">
				<div class="row">
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<p>&copy; Copyright 2019 IQRA | All rights reserved</p>
					</div>
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<ul class="list-unstyled footer-menu text-right">
							<li>Follow us:</li>
							<li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus google"></i></a></li>
							<li><a href="#"><i class="fa fa-skype skype"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- ./ End footer-bottom -->		
</footer>
<!-- ./ End Footer Area section -->
    <!-- ============================
    JavaScript Files
    ============================= -->
    <!-- jQuery -->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/assets/bootstrap.min.js"></script>
	<!-- Sticky JS -->
	<script src="js/assets/jquery.sticky.js"></script>
	<!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
 	<!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
    <!-- Slick Slider-->
    <script src="js/assets/slick.min.js"></script>
    <!-- Main Menu -->
	<script src="js/assets/jquery.meanmenu.min.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
</body>
</html>
