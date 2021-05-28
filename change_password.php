<?php
	//checking if user logged in
	session_start();
	if(!isset($_SESSION["student_id"])){
		header("Location:login.php");
	}
	
	require_once("db_connection.php");
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
	<!--Jquery-->
	<script type="text/javascript" src="js/vendor/jquery.js"></script>
</head>
<body class="login">
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
						<li><i class="fa fa-phone top-icon"></i> 02642 248609</li>
						<li><i class="fa fa-envelope top-icon"></i> iqra@gmail.com</li>
					</ul>
				</div>
				<div class="col-sm-6 col-xs-12 header-top-right">
					<ul class="list-unstyled">
						<li><a href="#" disabled><i class="fa fa-user top-icon"></i><?php echo $_SESSION['student_name']; ?></a></li>
						<li><a href="vendor/logout.php"><i class="fa fa-lock top-icon"></i> Logout</a></li>
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
						<li><a href="home.php">Home</a></li>
						<li><a href="notifications.php"> Notifications</a></li>
                        <li><a href="view_result.php"> Result</a></li>
                        <li><a href="view_attendance.php"> Attendance</a></li>
						<li><a href="view_fee.php">Fees</a></li>

						<li><a data-scroll>Gallery</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="upload_image.php">My Uploads</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
                        <li><a data-scroll>Study Corner</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="homework.php">Homework</a></li>
                                <li><a href="study_material.php">Study Material</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
						<li><a href="feedback.php">Feedback</a></li>
                        <li class="active"><a href="change_password.php">Change Password</a></li>
                        
					</ul>
				</div>
			</div><!-- /.container -->
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Notifications</h1>
						<p><span><a href="#">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> All Notifications</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
<!--  End header section-->


<!-- Teachers Area section -->

<section class="login-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form method="POST" action="vendor/change_password.php" class="learnpro-register-form text-center">
					<p class="lead">Change Password</p>					
					<div class="form-group">
					  	<input class="required form-control" id="password" placeholder="Current Password *" name="password" type="password">
					  	<div class="bg-danger text-danger text-center" id="errPass"></div>
					</div>	
					<div class="form-group">
					  	<input class="required form-control" id="new_password" placeholder="New Password *" name="new_password" type="password">
					  	<div class="bg-danger text-danger text-center" id="errNewPass"></div>
					</div>	
					<div class="form-group">
					  	<input class="required form-control" id="confirm_password" placeholder="Confirm Password *" name="confirm_password" 
					  		type="password">
					  	<div class="bg-danger text-danger text-center" id="errConfPass"></div>
					</div>		
					<div class="form-group register-btn">
					 	<input type="submit" value="Change Password" id="btn-change_pass" class="btn btn-primary btn-lg"/>
					</div>
					<div class="text-center" id="error"></div>
				</form>

			</div>		
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->
<!-- Fetching Notifications After Filtering -->
<script type="text/javascript">
	$(document).ready(function(){

		

		//hiding errors initially
		$("#errPass").hide();
		$("#errNewPass").hide();
		$("#errConfPass").hide();
		$("#error").hide();

		//setting error variables.
		var errPass = false;
		var errNewPass = false;
		var errConfPass = false;

		//validating fields.
		$("#password").focusout(function(){
			check_pass();
		});

		$("#new_password").focusout(function(){
			check_new_pass();
		});

		$("#confirm_password").focusout(function(){
			check_confirm_pass();
		});

		//functions to validate input
		function check_pass(){
			var Pass_len = $("#password").val().length;

			if(Pass_len < 1){
				$("#errPass").html("Password is required");
				$("#errPass").show();
				errPass = true;
			}else if(Pass_len != ""){
				var pass = $("#password").val();

				$.ajax({
					url: "vendor/verify_pass.php",
					type: "POST",
					data: {password: pass},
					success: function(data){
						if(data == 'ok'){
							$("#errPass").hide();
							errPass = false;
						}else{
							$("#errPass").html(data);
							$("#errPass").show();
							errPass = true;
						}
					}
				});
			}

		}

		function check_new_pass(){
			var NewPass_len = $("#new_password").val().length;

			if(NewPass_len < 1){
				$("#errNewPass").html("New Password must be 8 character long!");
				$("#errNewPass").show();
				errNewPass = true;
			}else{
				$("#errNewPass").hide();
				errNewPass = false;
			}
		}

		function check_confirm_pass(){
			var ConfPass_len = $("#confirm_password").val().length;
			var newPass = $("#new_password").val();
			var confPass = $("#confirm_password").val();
			if(newPass != confPass){
				errConfPass = true;
				$("#errConfPass").html("Password Does Not Match!");
				$("#errConfPass").show();
			}else{
				errConfPass = false;
				$("#errConfPass").hide();
			}
		}

		$("#btn-change_pass").click(function(e){
			e.preventDefault();
			var new_password = $("#new_password").val();

			if(errPass == false && errNewPass == false && errConfPass == false){
				
				//alert(new_password);
				$.ajax({
					url: "vendor/change_password.php",
					type: "POST",
					data: { password_update: new_password },
					success: function(data){
						if(data == 'success'){
							$("#error").html("Password Changed Successfully!");
							$("#error").addClass("bg-success text-bold");
							$("#error").show();
							$("#error").fadeOut(5000);

							//emptying all inputs.
							$("#password").val("");
							$("#new_password").val("");
							$("#confirm_password").val("");

						}else{
							$("#error").html("Something Went Wrong!");
							$("#error").addClass("bg-danger text-danger");
							$("#error").show();
							$("#error").fadeOut(3000);

							//emptying all inputs.
							$("#password").val("");
							$("#new_password").val("");
							$("#confirm_password").val("");
						}
					}
				});
			}
		});
	});
</script>
<!-- Footer Area section -->
<footer>
	<div class="container">
	</div>

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
</footer><!-- ./ End Footer Area -->
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
