<?php
	//checking if user already logged in.
	session_start();
	require_once('db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}


	$ATTENDANCE_ID = $_GET['id'];
	$CLASS_ID = $_SESSION['class_id'];

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
						<li><i class="fa fa-phone top-icon"></i> +123 456 789</li>
						<li><i class="fa fa-envelope top-icon"></i> hello@eduread.com</li>
					</ul>
				</div>
				<div class="col-sm-6 col-xs-12 header-top-right">
					<?php
						include("top_bar.php");
					?>
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
						<li><a  href="home.php">Home</a>
							
						</li>
						<li><a href="my_classes.php">My Class</a></li>
                        <li><a data-scroll>Notifications</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="notifications.php">All Notifications</a></li>
                                <li><a href="send_notifications.php">Send Notifications</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
						<li><a data-scroll>Result</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="view_result.php">View Result</a></li>
                                <li><a href="add_result.php">Add Result</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
						<li class="active"><a data-scroll>Attendance</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="add_attendance.php">Add Attendance</a></li>
                                <li><a href="view_attendance.php">View Attendance</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
						<li><a data-scroll>Fees</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="add_fees.php">Add Fees</a></li>
                                <li><a href="view_fees.php">View Fees</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
						<li><a data-scroll>Reports</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="attendance_report.php">Attendance Report</a></li>
                                <li><a href="fee_report.php">Fee Reports</a></li>
                                <li><a href="result_report.php">Result Reports</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
                        <li><a href="study_corner.php">Study Material</a></li>
                        <li><a href="change_password.php">Change Password</a></li>
					</ul>
				</div>
			</div><!-- /.container -->
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Attendance</h1>
						<p><span><a href="#">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> Edit Attendance</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
<!--  End header section-->
<?php 
	$sql = "SELECT attendance_mst . * , student_mst . * , month_mst . * , division_mst . * 
			FROM attendance_mst
			INNER JOIN student_mst ON attendance_mst.student_id = student_mst.student_id
			INNER JOIN month_mst ON attendance_mst.month_id = month_mst.month_id
			INNER JOIN division_mst ON attendance_mst.division_id = division_mst.division_id
			WHERE attendance_mst.attendance_id = $ATTENDANCE_ID";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0){
		$Attendance = mysqli_fetch_assoc($result);
	}
?>
<!-- Teachers Area section -->
<section class="login-area">
	<div class="container">
		<div class="row">
			<h3>Update Attendance</h3>
			<form name="add_result_form" action="vendor/updateAtttendance.php" method="POST">
				<div class="from-body">
					<div class="form-group row">
						<label class="control-label col-md-2">
							Class Name:
						</label>
						<div class="col-md-5">
							<?php echo $Attendance['division_name']; ?>
						</div>
					</div>
					<div class="form-group row">
						
							<label class="control-label col-md-2">
								Roll No:
							</label>

								
							<input type="text" name="roll_no" id="roll_no" 
								value="<?php echo $Attendance['student_id']; ?>" disabled>

							<input type="hidden" name="attendance_id1" id="attendance_id1" 
							   value="<?php echo $ATTENDANCE_ID; ?>">
											
							
						
					</div>
					<div class="form-group row">
					
							<label class="control-label col-md-2">
								Student Name:
							</label>
							
							<input type="text" name="student_name" id="student_name" 
									value="<?php echo $Attendance['fname'].' '.$Attendance['lname']; ?>" disabled>
											
								
							
						
					</div>
					<div class="form-group row" id="subjects" >
						<label class="control-label col-md-2">
								<b><u>Month Name:</u></b>
						</label>
						<label class="control-label col-md-5">
								<?php echo $Attendance['month_name']; ?>
						</label>
						<br/>
						<br/>
						<?php
							$present_days = $Attendance['present_days'];
							$absent_days = $Attendance['absent_days'];
										$output .= "
											<div class='form-group row'>
												<label class='control-label col-md-2'>Enter Present Days</label>
												<input type='text' name='present_days' placeholder='Enter Present Days' class='col-md-5'
													value='$present_days'>
											</div>
											<div class='form-group row'>
												<label class='control-label col-md-2'>Enter Absent Days</label>
												<input type='text' name='absent_days' placeholder='Enter Present Days' class='col-md-5'
													value='$absent_days'>
											</div>
										";
									
							

							echo $output;
					?>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="offset-md-3 col-md-9 text-center">
								<input type="submit" id="btn-update" name="btn-update" class="btn btn-info m-r-20" value="Update Attendance">
								<a class="btn btn-default" href="view_attendance.php">Cancel</a>
							</div>
						</div>
					</div>
			
				
			</div>
			</form>
		</div>
	</div>
</section>


<!-- ./ End Teachers Area section -->

<!-- Footer Area section -->
<?php
	include("footer.php");
?>
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
