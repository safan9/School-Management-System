<?php
	//checking if user already logged in.
	session_start();
	if(isset($_SESSION["student_id"])){
		header("Location:home.php");
	}

	if(isset($_SESSION["staff_id"])){
		header("Location:Staff/home.php");
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
	<!-- Popup -->
	<link href="css/assets/magnific-popup.css" rel="stylesheet"> 
	<!-- Revolution Slider -->
	<link rel="stylesheet" href="css/assets/revolution/layers.css">
	<link rel="stylesheet" href="css/assets/revolution/navigation.css">
	<link rel="stylesheet" href="css/assets/revolution/settings.css">	
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     
	<!-- Slick Slider -->
	<link href="css/assets/slick.css" rel="stylesheet"> 	
	<link href="css/assets/slick-theme.css" rel="stylesheet"> 	
	<!-- Mean Menu-->
	<link rel="stylesheet" href="css/assets/meanmenu.css">   
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
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
						<li class="active" ><a  href="index.php">Home</a>
							
						</li>
						<!--
							<li><a href="login.php">Login</a></li>
						-->
						<li><a data-scroll>Login</a>
							<!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="login.php">Student Login</a></li>
                                <li><a href="Staff/login.php">Staff Login</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
                        <li><a href="register.php">Registation</a></li>
                        <li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div><!-- /.container -->
		</nav>
	</div>	
	<!--==================
		Slider
	===================-->
    <div class="rev_slider_wrapper">
       <div id="rev_slider_1" class="rev_slider" style="display:none">

            <!-- BEGIN SLIDES LIST -->
            <ul>
				<li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/index/slider-01.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="images/index/slider-01.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-140" 
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Better education for
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-80" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">A better world
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-10" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">with experienced teaching staff of school.
					</div>						
					
					
				</li>
                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/index/slider-02.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="images/index/slider-02.jpg" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR.1 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-140" 
						data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Develop a passion for learning,
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-80" 
						data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
						style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">with our organization.
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p" 
						data-x="left" data-hoffset="0" 
						data-y="center" data-voffset="-10" 
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">We have great infrastructure and facilities for students.
					</div>
					
				</li>
            </ul><!-- END SLIDES LIST -->

        </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
</header>
	<!--  End header section-->



<section class="slider-content-bottom">
	<div class="container">
		<div class="row sider-btm-row-inner">
			<div class="col-sm-4 content_body slide_cont_box_01">
				<div class="slider-btm-box btm-item_01">
					<img src="images/index/slide-bottom-01.png" alt="" class="btm-item-icon">
					<h3>Professional Teachers</h3>
					<p>We have teachers with great experience and knowledge.</p>
				</div>
			</div>

			<div class="col-sm-4 content_body slide_cont_box_02">
				<div class="slider-btm-box btm-item_02">
					<img src="images/index/slide-bottom-02.png" alt="" class="btm-item-icon">
					<h3>Access Anywhere Online</h3>
					<p>Acces your result and attendance and other details online.</p>
				</div>
			</div>

			<div class="col-sm-4 content_body slide_cont_box_03">
				<div class="slider-btm-box btm-item_03">
					<img src="images/index/slide-bottom-03.png" alt="" class="btm-item-icon">
					<h3>Graduation Certificate</h3>
					<p>With our influence in market you can join any college and organization.</p>
				</div>
			</div>

		</div>
	</div>
</section>		


<!-- Start Welcome Area section -->
<section class="Welcome-area">
	<div class="container">	
		<div class="row">
			<div class="col-sm-6 Welcome-area-text">
				<div class="row">
					<div class="col-sm-12 section-header-box">
						<div class="section-header section-header-l">
							<h2>Welcome To IQRA</h2>
						</div><!-- ends: .section-header -->
					</div>
				</div>
				<p>We welcome all the new students to our organization, where they will learn about many things and will develop their mindset
					for future and their career. We will help and support every student in any problem and difficulties. 
					Our goal is to make our students ready for any situation in their life and career.
				</p>
				<p>Come and join us for bright future.</p>	
	
			</div><!-- Ends: . -->
			
			<div class="col-sm-6 welcome-img">
				<img src="images/index/welcome.png" alt="" class="img-responsive">
			</div><!-- Ends: . -->					
		</div>
	</div>
</section><!-- Ends: . -->
<!-- ./ End Welcome Area section -->


<!--Start Courses Area Section-->

<!-- Start Video Area Section -->
<section class="video-main-area video">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 video-play-btn">
				<a href="https://www.youtube.com/watch?v=uXFUl0KcIkA" class="video-iframe"><i class="fa fa-play"></i></a>
			</div>

			<div class="video-content">
				<h2>Take a Tour EduRead Campus</h2>
			</div><!-- ends: .section-header -->				
		</div>
	</div>
</section>
<!-- ./ End Video Area section -->




<!-- ./ End Students Say Area section -->
<section class="students-say-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>What Students Have To SAY</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
			<div class="img-full-box">
				<div class="col-sm-3 col-sm-offset-4">								
					<div class="carousel-images slider-nav">
						<div>
							<img src="images/index/stu-parent-01.jpg" alt="1" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/index/stu-parent-02.jpg" alt="2" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/index/stu-parent-03.jpg" alt="3" class="img-responsive img-circle">
						</div>
						<div>
							<img src="images/index/stu-parent-04.jpg" alt="3" class="img-responsive img-circle">
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-8 col-sm-offset-2">
				<div class="carousel-text slider-for">
					<div class="single-box">
						<p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibh euismod tincidunt ut laoreet dolor you magna aliquam eratm volutpat. Ut wisiyp oenim adefra miniumyp veniam, quis nostrud exerci tation ullavolutpat ipsum.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Jhonthan Smith</h3>
						<span>Alexis, Parents</span>
					</div>

					<div class="single-box">
						<p>Maecenas ut dui vitae magna vestibulum fermentum ut non est. Fusce finibus viverra enim, et laoreet metus fringilla sit amet. Ut dui nunc, aliquet ut malesuada sit amet, sagittis aliquam laoreet lorem. In hac habitasse platea dictumst.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Jhon Doe</h3>
						<span>Martin, Parent</span>
					</div>

					<div class="single-box">
						<p>Aenean at leo hendrerit, congue erat ut, volutpat felis. Suspendisse et sapien purus. Aenean tincidunt diam ac magna scelerisque dapibus. Quisque non elit et justo tristique semper. Sed a urna eros. Etiam tempus tempus leo vel aliquam.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Jhonthan Smith</h3>
						<span>Alexis, Parents</span>
					</div>

					<div class="single-box">
						<p>Cras ut ipsum et erat accumsan aliquam. Cras feugiat eu dolor a imperdiet. Vestibulum ornare, nunc a pulvinar pellentesque, mi ipsum elementum velit, lobortis convallis lacus ipsum eget nisl. Mauris eget est lorem praesent et metus laoreet.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Jessica Alaba</h3>
						<span>Martin, Parent</span>
					</div>
				</div>
			</div><!-- /.block-text -->
		</div>	<!--./End row-->
	</div>
</section>
<!-- ./ End Students Say Area section -->
	

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
</footer><!-- ./ End Footer Area-->

    <!-- ============================
    JavaScript Files
    ============================= -->
    <!-- jQuery -->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/assets/bootstrap.min.js"></script>
	 <!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
 	<!-- Revolution Slider -->
	<script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
	<script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>   
	<!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
    <!-- Sticky JS -->
	<script src="js/assets/jquery.sticky.js"></script>
	<!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
   <!-- Slick Slider-->
    <script src="js/assets/slick.min.js"></script>
    <!-- Main Menu -->
	<script src="js/assets/jquery.meanmenu.min.js"></script>
	<!-- Revolution Extensions -->
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/revolution.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
</body>
</html>
