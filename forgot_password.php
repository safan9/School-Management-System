<?php
	require_once('db_connection.php');
	//require_once("PHPMailer/_lib/class.phpmailer.php");
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
					<a href="#" class="navbar-brand  data-scroll"><img src="images/logo.png" alt=""><span>EduRead</span></a>
				</div>

				<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right">
						
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Login</h1>
						<p><span><a href="#">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> Forgot Password</span></p>
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
				<form action="#" method="POST" class="learnpro-register-form text-center">
					<p>Lost your password? Please enter your email address. You will receive a password details via email.</p>					
					<div class="form-group"> 
					  	<input autocomplete="off" class="required form-control" placeholder="email" name="email" type="email" id="email">
					</div>
					<div class="form-group register-btn">
					 	<input type="submit" class="btn btn-primary btn-lg" name="btn-submit" id="btn-submit" value="Forgot Password" />
					</div>	
				</form>
			</div>												
		</div>
	</div>
</section>
<?php
	
	if(isset($_POST['btn-submit'])){

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
			if($isSent){
				echo "<script>Mail Sent Successfully, Check Your Inbox!</script>";
			}else{
					
					echo "<script>Failed to send Mail!</script>";
			}
		}else{
			echo "email not found";
		}
		

		/*if(mysqli_num_rows($res) > 0){


			$student = mysqli_fetch_assoc($res);
			//student info
			$pass = $student['password'];
			$name = $student['fname'];
			//mail details
			$to = $student['email'];
			$mail = new PHPMailer();

			$mail->IsSMTP();                                      // set mailer to use SMTP
			$mail->Host = "smtp.gmail.com";  // specify main and backup server
			$mail->SMTPAuth = true;     // turn on SMTP authentication
			$mail->Username = "afridi92656@gmail.com";  // SMTP username
			$mail->Password = "barcelonashit@100"; // SMTP password

			$mail->From = "afridi92656@gmail.com";
			$mail->FromName = "Iqra Admin Desk";
			$mail->AddAddress("$to", "$name");                  // name is optional
			$mail->AddReplyTo("info@example.com", "Information");

			$mail->WordWrap = 50;                                 // set word wrap to 50 characters
			//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
			//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
			$mail->IsHTML(true);                                  // set email format to HTML

			$mail->Subject = "EduRead Password Info!";
			$mail->Body    = "Dear, <b>$name</b><br>Your Password Info is given below<br>Password: $pass<br>Now Login with password and change it for 	
								security!";
			$mail->AltBody = "Dear, '$name' Your Password Info is given below<br>Password: '$pass'Now Login with password and change it for 	
								security!";

			if(!$mail->Send())
			{
			   echo "<script>Message could not be sent. </script>";
			   echo "Mailer Error: " . $mail->ErrorInfo;
			   exit;
			}

			echo "<script>Message has been sent</script>";
		}else{
			echo "Mail Not Found!";
		}*/
	}else{
		echo "problem";
	}
?>


<!-- ./ End Teachers Area section -->

<!-- Footer Area section -->
<footer>
	<div class="container">
		<div class="row">
			<div class=" col-sm-12 footer-content-box">
				<div class="col-sm-3">
					<h3><span><i class="fa fa-graduation-cap footer-h-icon"></i></span> EduRead</h3>
					<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news.</p>
					<ul class="list-unstyled">
						<li><span><i class="fa fa-phone footer-icon"></i></span>0123-456-789</li>
						<li><span><i class="fa fa-envelope footer-icon"></i></span>hello@education.com</li>
						<li><span><i class="fa fa-map-marker footer-icon"></i></span>01 Central Park, NYC</li>
					</ul>
				</div>

				<div class="col-sm-2">
					<h3>Courses</h3>
					<ul class="list-unstyled">
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Web Design</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Apps Developer</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Graphic Design</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>PHP Tranning</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>IOS Developer</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>App Design</a></li>
					</ul>
				</div>

				<div class="col-sm-2">
					<h3>Links</h3>
					<ul class="list-unstyled">
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>About Us</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Teacher</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Blog</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Events</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Gallery</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Contact</a></li>
					</ul>
				</div>

				<div class="col-sm-2">
					<h3>Support</h3>
					<ul class="list-unstyled">
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Language Packs</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Release Status</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a></li>
					</ul>
				</div>	

				<div class="col-sm-3">
					<h3>Get in touch</h3>
					<p>Enter your email and we'll send you more information.</p>

					<form action="#">
						<div class="form-group">
							<input placeholder="Your Email" type="email" required="" >
							<div class="submit-btn">
								<button type="submit" class="text-center">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-inner">
				<div class="row">
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<p>&copy; Copyright 2018 EcologyTheme | All rights reserved</p>
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
