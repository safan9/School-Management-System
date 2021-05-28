<?php
	//checking if user already logged in.
	session_start();
	require_once('db_connection.php');
	if(!isset($_SESSION["staff_id"])){
		header("Location:../login.php");
	}

	$STAFF_ID = $_SESSION['staff_id'];
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
						<li><a data-scroll>Attendance</a>
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
                        <li class="active"><a data-scroll>Study Corner</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="study_corner.php">Homework</a></li>
                                <li><a href="study_material.php">Study Material</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
                        <li><a href="change_password.php">Change Password</a></li>
					</ul>
				</div>
			</div><!-- /.container -->
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Study Corner</h1>
						<p><span><a href="#">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> Study Material</span></p>
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
			<h3>Upload Homework:</h3>
			<form name="homework_form" method="POST" action="vendor/upload_study_material.php" enctype="multipart/form-data">
				<div class="row">
					<label>Select Subject For Material:</label>
					<div class="form-group">
						<select name="subjects" class="form-control">
							<option value="0">
								--SELECT SUBJECT | CLASS--
							</option>
							<?php
								$sql = "SELECT subject_mst.*, class_mst.*
										FROM `subject_mst`
										INNER JOIN `class_mst` ON subject_mst.class_id = class_mst.class_id
										WHERE staff_id = $STAFF_ID";
								$res = mysqli_query($conn, $sql);

								if(mysqli_num_rows($res) > 0){
									while ($row = mysqli_fetch_assoc($res)) {
										?>
											<option value="<?php echo $row['subject_id']; ?>">
												<?php echo $row['subject_name']; ?>|
												<?php echo $row['class_name']; ?>
											</option>
										<?php

									}
								}else{
									?>
										<option value="<?php echo $row['subject_id']; ?>">
											<?php echo $row['subject_name']; ?>
										</option>
									<?php
								}
							?>
						</select>
					</div>
					<label>Select Study Material(PDF):</label>
					<div class="form-group">
						<input type="file" name="Material_File" class="form-control" accept="application/pdf" />
					</div>
					<?php
						if($_SESSION['file_status'] != ''){
							echo "<div class='well'>";
							echo $_SESSION['file_status'];
							echo "</div>";
							$_SESSION['file_status'] = '';
						}
					?>
					<div class="form-actions">
						<input type="submit" name="btn-upload" class="btn btn-primary" />
						<input type="reset" name="btn-reset" class="btn btn-default" />
					</div>
				</div>
			</form>
		</div>
		<!-- 
				** Fetching Images from database for student **
			-->
			<?php
				$STAFF_ID = $_SESSION['staff_id'];
				$sql = "SELECT study_material_mst.*, subject_mst.*, class_mst.*
						FROM `study_material_mst`
						INNER JOIN subject_mst ON study_material_mst.subject_id = subject_mst.subject_id
						INNER JOIN class_mst ON subject_mst.class_id = class_mst.class_id
						WHERE study_material_mst.staff_id = $STAFF_ID
						ORDER BY study_mat_id DESC";
				$result = mysqli_query($conn, $sql);

			?>
		<div class="row">
			<br/>
			<div class="well bg-warning">
					<label class="text-danger">My Uploads:</label>
			</div>
				
						<?php  
							if(mysqli_num_rows($result) > 0){
						?>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>File Name</th>
										<th>Subject Name</th>
										<th>Class Name</th>
										<th>Upload Date</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
								<?php
								while($file = mysqli_fetch_assoc($result)){
									?>
									<tr>
										<td>
											<?php echo $file['study_mat_id']; ?>
										</td>
										<td>
											<?php echo $file['file_name']; ?>
										</td>
										<td>
											<?php echo $file['subject_name']; ?>
										</td>
										<td>
											<?php echo $file['class_name']; ?>
										</td>
										<td>
											<?php echo $file['date']; ?>
										</td>
										<td>
											<a class="btn btn-danger btn_delete" data-id="<?php echo $file['homework_id']; ?>">
												<i class="fa fa-trash-o"></i>
											</a>
										</td>
									</tr>
									<?php
								}
							}else{
								?>
									<div class='well'>
										No Files Found!
									</div>
								<?php
							}
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<!-- ./ End Teachers Area section -->
<script type="text/javascript">
	$(document).ready(function(){
		$(".btn_delete").click(function(e){
			//alert('ok');
			e.preventDefault();
			var image_id = $(this).attr('data-id');
			var confirmation = false;
			confirmation = confirm("Are You Sure You Want To Delete This Record?");
			if(confirmation){
				location.href = "vendor/delete_study_mat.php?id="+image_id;
			}
		});
	});
</script>
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
