<?php
	//checking if user already logged in.
	session_start();
	require_once('db_connection.php');
	if(!isset($_SESSION["student_id"])){
		header("Location:login.php");
	}
	//fetching data from session
	$class_id = $_SESSION['class_id'];
	$output = "";

	$student_id = $_SESSION['student_id'];
	if($student_id != '0'){

		$sql = "SELECT *
				FROM `student_mst`
				WHERE student_id = $student_id";
		$res = mysqli_query($conn, $sql);

		if(mysqli_num_rows($res) > 0){
			$student = mysqli_fetch_assoc($res);
		}
		$student_name = $student['fname']." ".$student['lname'];
		$division_id = $student['division_id'];


		$sql = "
				SELECT fees_mst. * , division_mst.division_name, student_mst . * 
				FROM fees_mst
				INNER JOIN division_mst ON fees_mst.division_id = division_mst.division_id
				INNER JOIN student_mst ON fees_mst.student_id = student_mst.student_id
				WHERE fees_mst.student_id = $student_id";
		$record = mysqli_query($conn, $sql);

		if(mysqli_num_rows($record) > 0){


			if(mysqli_num_rows($record) > 0){
				while($result = mysqli_fetch_assoc($record)){
					$class_name = $result['division_name'];
					$fees_date = $result['date'];
					$tuition_fee = $result['tuition_fee'];
					$exam_fee = $result['exam_fee'];
					$lab_fee = $result['lab_fee'];
					$sports_fee = $result['sports_fee'];
					$total_fee = $result['total_fee'];
				}
			}
		
			$output .= "
				<table class='table table-bordered'>
									<tr>
										<th colspan='2' class='text-center bg-primary'>Iqra Higher Secondary School<br/>Fee Receipt</th>
									</tr>
									<tr>
										<th>Student Name:</th>
										<td>$student_name</td>
									</tr>
									<tr>
										<th>Roll No:</th>
										<td>$student_id</td>
									</tr>
									<tr>
										<th>Class Name:</th>
										<td>$class_name</td>
									</tr>
									<tr>
										<th>Fee Type:</th>
										<td>Annual</td>
									</tr>
									<tr>
										<th>Tuition Fee</th>
										<td>&#x20b9; $tuition_fee</td>
										
									</tr>
									<tr>
										<th>Exam Fee</th>
										<td>&#x20b9; $exam_fee</td>
									
									</tr>
									<tr>
										<th>Lab Fee</th>
										<td>&#x20b9; $lab_fee</td>
										
									</tr>
									<tr>
										<th>Sports Fee</th>
										<td>&#x20b9; $sports_fee</td>
										
									</tr>
									<tr>
										<th>Total Fee</th>
										<th>&#x20b9; $total_fee</th>
									</tr>
									</table>
					
								<a href='download_fee_reciept.php?id=$student_id' class='btn btn-primary' name='btn-print''>
									Print Preview
								</a> ";

			
				
		}else{

			$output .= "
				<div class='well text-warning bg-warning'>
					Fees Not Added Yet!<br/>
					Kindly Contact Your Class Incharge.
				</div>
				
			";
		}

		
	}else{
		echo "";
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
						<li><a href="vendor/logout.php"><i class="fa fa-lock top-icon"></i>Logout</a></li>
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
						<li class="active"><a href="view_fee.php">Fees</a></li>

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
                        <li><a href="change_password.php">Change Password</a></li>
					</ul>
				</div>
			</div><!-- /.container -->
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Fees</h1>
						<p><span><a href="#">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> My Fees</span></p>
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
			<h2>My Fees</h2>
			<hr/>
		
		<br/>
		<div id="my_result">
			<?php echo $output; ?>
		</div>
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->

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
