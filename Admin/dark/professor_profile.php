<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index-2.html">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Smart</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="../assets/img/flags/gb.png"
								 class="position-left" alt=""> English <span class="fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="deutsch"><img src="../assets/img/flags/de.png" alt=""> Deutsch</a>
								</li>
								<li>
									<a class="ukrainian"><img src="../assets/img/flags/ua.png" alt=""> Українська</a>
								</li>
								<li>
									<a class="english"><img src="../assets/img/flags/gb.png" alt=""> English</a>
								</li>
								<li>
									<a class="espana"><img src="../assets/img/flags/es.png" alt=""> España</a>
								</li>
								<li>
									<a class="russian"><img src="../assets/img/flags/ru.png" alt=""> Русский</a>
								</li>
							</ul>
						</li>
						<!-- end language menu -->
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span>
													Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof2.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof3.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof1.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof8.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../assets/img/prof/prof5.jpg" class="img-circle" alt=""> </span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle " src="../assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"> Kiran </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="login.html">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors">
					<li>
						<p class="selector-title">Main Layouts</p>
					</li>
					<li class="complete">
						<div class="theme-color layout-theme">
							<a href="http://radixtouch.in/templates/admin/smart/source/light/professor_profile.html" data-theme="light"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Sidebar Color</p>
					</li>
					<li class="complete">
						<div class="theme-color sidebar-theme">
							<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Header Brand color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color logo-theme">
							<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Header color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color header-theme">
							<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
						 data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="../assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
									</div>
									<div class="pull-left info">
										<p><?php echo $_SESSION["username"]; ?></p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start active open">
								<a href="home.php" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
								</a>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Professors</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_professors.php" class="nav-link "> <span class="title">All Professors</span>
										</a>
									</li>
					
									<li class="nav-item">
										<a href="add_professor_bootstrap.php" class="nav-link "> <span class="title">Add Professor Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_professor.php" class="nav-link "> <span class="title">Edit Professor</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="professor_profile.php" class="nav-link "> <span class="title">About Professor</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_students.php" class="nav-link "> <span class="title">All Students</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="edit_student.php" class="nav-link "> <span class="title">Edit Student</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="student_profile.php" class="nav-link "> <span class="title">About Student</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Classes</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_courses.php" class="nav-link "> <span class="title">All Classes</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_course.php" class="nav-link "> <span class="title">Add Class</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="edit_course.php" class="nav-link "> <span class="title">Edit Class</span>
										</a>
									</li>
									
								</ul>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">email</i>
									<span class="title">Email</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="email_inbox.php" class="nav-link ">
											<span class="title">Inbox</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_view.php" class="nav-link ">
											<span class="title">View Mail</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="email_compose.html" class="nav-link ">
											<span class="title">Compose Mail</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
									<span class="title">Fees</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="fees_collection.php" class="nav-link "> <span class="title">Fees Collection</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees.php" class="nav-link "> <span class="title">Add Fees </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fees_bootstrap.php" class="nav-link "> <span class="title">Add Fees Bootstrap</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="fees_receipt.php" class="nav-link "> <span class="title">Fee Receipt</span>
										</a>
									</li>
								</ul>
							</li>
								</ul>
							</li>	
						</ul>
					</div>
				</div>
			</div>
			
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Professor Profile</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Professors</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Professor Profile</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile-userpic">
												<img src="../assets/img/dp.jpg" class="img-responsive" alt=""> </div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> John Deo </div>
											<div class="profile-usertitle-job"> Jr. Professor </div>
										</div>
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Followers</b> <a class="pull-right">1,200</a>
											</li>
											<li class="list-group-item">
												<b>Following</b> <a class="pull-right">750</a>
											</li>
											<li class="list-group-item">
												<b>Friends</b> <a class="pull-right">11,172</a>
											</li>
										</ul>
										<!-- END SIDEBAR USER TITLE -->
										<!-- SIDEBAR BUTTONS -->
										<div class="profile-userbuttons">
											<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">Follow</button>
											<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">Message</button>
										</div>
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
								<div class="card">
									<div class="card-head card-topline-aqua">
										<header>About Me</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="profile-desc">
											Hello I am John Deo a Professor in xyz College Surat. I love to work with all my college staff and seniour
											professors.
										</div>
										<ul class="list-group list-group-unbordered">
											<li class="list-group-item">
												<b>Gender </b>
												<div class="profile-desc-item pull-right">Female</div>
											</li>
											<li class="list-group-item">
												<b>Operation Done </b>
												<div class="profile-desc-item pull-right">30+</div>
											</li>
											<li class="list-group-item">
												<b>Degree </b>
												<div class="profile-desc-item pull-right">B.A., M.A., P.H.D.</div>
											</li>
											<li class="list-group-item">
												<b>Designation</b>
												<div class="profile-desc-item pull-right">Jr. Professor</div>
											</li>
										</ul>
										<div class="row list-separated profile-stat">
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 37 </div>
												<div class="uppercase profile-stat-text"> Projects </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 51 </div>
												<div class="uppercase profile-stat-text"> Tasks </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 61 </div>
												<div class="uppercase profile-stat-text"> Uploads </div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-head card-topline-aqua">
										<header>Address</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="row text-center m-t-10">
											<div class="col-md-12">
												<p>456, Pragri flat, varacha road, Surat
													<br> Gujarat, India.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-head card-topline-aqua">
										<header>Work Expertise</header>
									</div>
									<div class="card-body no-padding height-9">
										<div class="work-monitor work-progress">
											<div class="states">
												<div class="info">
													<div class="desc pull-left">Java</div>
													<div class="percent pull-right">50%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40"
													 aria-valuemin="0" aria-valuemax="100" style="width: 70%">
														<span class="sr-only">50% </span>
													</div>
												</div>
											</div>
											<div class="states">
												<div class="info">
													<div class="desc pull-left">Php</div>
													<div class="percent pull-right">85%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
													 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
														<span class="sr-only">85% </span>
													</div>
												</div>
											</div>
											<div class="states">
												<div class="info">
													<div class="desc pull-left">Android</div>
													<div class="percent pull-right">20%</div>
												</div>
												<div class="progress progress-xs">
													<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40"
													 aria-valuemin="0" aria-valuemax="100" style="width: 35%">
														<span class="sr-only">20% </span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->

							<div class="profile-content">
								<div class="row">
									<div class="card">
										<div class="card-topline-aqua">
											<header></header>
										</div>
										<div class="white-box">
											<!-- Nav tabs -->
											<div class="p-rl-20">
												<ul class="nav customtab nav-tabs" role="tablist">
													<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">About Me</a></li>
													<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Activity</a></li>
												</ul>
											</div>
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active fontawesome-demo" id="tab1">
													<div id="biography">
														<div class="row">
															<div class="col-md-3 col-6 b-r"> <strong>Full Name</strong>
																<br>
																<p class="text-muted">John Deo</p>
															</div>
															<div class="col-md-3 col-6 b-r"> <strong>Mobile</strong>
																<br>
																<p class="text-muted">(123) 456 7890</p>
															</div>
															<div class="col-md-3 col-6 b-r"> <strong>Email</strong>
																<br>
																<p class="text-muted">johndeo@example.com</p>
															</div>
															<div class="col-md-3 col-6"> <strong>Location</strong>
																<br>
																<p class="text-muted">India</p>
															</div>
														</div>
														<hr>
														<p class="m-t-30">Completed my graduation in Arts from the well known and renowned institution of India –
															SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was affiliated to M.S. University. I ranker in
															University exams from the same university from 1996-01.</p>
														<p>Worked as Professor and Head of the department at Sarda Collage, Rajkot, Gujarat from 2003-2015 </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
															industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
															scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
															into electronic typesetting, remaining essentially unchanged.</p>
														<br>
														<h4 class="font-bold">Education</h4>
														<hr>
														<ul>
															<li>B.A.,Gujarat University, Ahmedabad,India.</li>
															<li>M.A.,Gujarat University, Ahmedabad, India.</li>
															<li>P.H.D., Shaurashtra University, Rajkot</li>
														</ul>
														<br>
														<h4 class="font-bold">Experience</h4>
														<hr>
														<ul>
															<li>One year experience as Jr. Professor from April-2009 to march-2010 at B. J. Arts College, Ahmedabad.</li>
															<li>Three year experience as Jr. Professor at V.S. Arts & Commerse Collage from April - 2008 to April -
																2011.</li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
														</ul>
														<br>
														<h4 class="font-bold">Conferences, Cources & Workshop Attended</h4>
														<hr>
														<ul>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
															<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
														</ul>
														<br>
													</div>
												</div>
												<div class="tab-pane" id="tab2">
													<div class="container-fluid">
														<div class="row">
															<div class="full-width p-rl-20">
																<div class="panel">
																	<form>
																		<textarea class="form-control p-text-area" rows="4" placeholder="Whats in your mind today?"></textarea>
																	</form>
																	<footer class="panel-footer">
																		<button class="btn btn-post pull-right">Post</button>
																		<ul class="nav nav-pills p-option">
																			<li>
																				<a href="#"><i class="fa fa-user"></i></a>
																			</li>
																			<li>
																				<a href="#"><i class="fa fa-camera"></i></a>
																			</li>
																			<li>
																				<a href="#"><i class="fa  fa-location-arrow"></i></a>
																			</li>
																			<li>
																				<a href="#"><i class="fa fa-meh-o"></i></a>
																			</li>
																		</ul>
																	</footer>
																</div>
															</div>
															<div class="full-width p-rl-20">
																<ul class="activity-list">
																	<li>
																		<div class="avatar">
																			<img src="../assets/img/std/std1.jpg" alt="" />
																		</div>
																		<div class="activity-desk">
																			<h5><a href="#">Rajesh</a> <span>Uploaded 3 new photos</span></h5>
																			<p class="text-muted">7 minutes ago near Alaska, USA</p>
																			<div class="album">
																				<a href="#">
																					<img alt="" src="../assets/img/mega-img1.jpg">
																				</a>
																				<a href="#">
																					<img alt="" src="../assets/img/mega-img2.jpg">
																				</a>
																				<a href="#">
																					<img alt="" src="../assets/img/mega-img3.jpg">
																				</a>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="avatar">
																			<img src="../assets/img/std/std3.jpg" alt="" />
																		</div>
																		<div class="activity-desk">
																			<h5><a href="#">John Doe</a> <span>attended a meeting with</span>
																				<a href="#">Lina Smith.</a></h5>
																			<p class="text-muted">2 days ago near Alaska, USA</p>
																		</div>
																	</li>
																	<li>
																		<div class="avatar">
																			<img src="../assets/img/std/std4.jpg" alt="" />
																		</div>
																		<div class="activity-desk">
																			<h5><a href="#">Kehn Anderson</a> <span>completed the task “wireframe design” within the dead line</span></h5>
																			<p class="text-muted">4 days ago near Alaska, USA</p>
																		</div>
																	</li>
																	<li>
																		<div class="avatar">
																			<img src="../assets/img/std/std5.jpg" alt="" />
																		</div>
																		<div class="activity-desk">
																			<h5><a href="#">Jacob Ryan</a> <span>was absent office due to sickness</span></h5>
																			<p class="text-muted">4 days ago near Alaska, USA</p>
																		</div>
																	</li>
																</ul>

																<div class="post-box"> <span class="text-muted text-small"><i class="fa fa-clock-o" aria-hidden="true"></i>
																		13 minutes ago</span>
																	<div class="post-img"><img src="../assets/img/slider/fullimage1.jpg" class="img-responsive" alt=""></div>
																	<div>
																		<h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
																		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
																			the industry's standard dummy text ever since the 1500s, </p>
																		<p> <a href="#" class="btn btn-raised btn-info btn-sm"><i class="fa fa-heart-o" aria-hidden="true"></i>
																				Like (5) </a> <a href="#" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i>
																				Reply</a> </p>
																	</div>
																</div>
																<div class="post-box"> <span class="text-muted text-small"><i class="fa fa-clock-o" aria-hidden="true"></i>
																		37 minutes ago</span>
																	<div class="post-img"><img src="../assets/img/slider/fullimage2.jpg" class="img-responsive" alt=""></div>
																	<div>
																		<h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
																		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
																			the industry's standard dummy text ever since the 1500s, </p>
																		<p> <a href="#" class="btn btn-raised btn-info btn-sm"><i class="fa fa-heart-o" aria-hidden="true"></i>
																				Like (5) </a> <a href="#" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i>
																				Reply</a> </p>
																	</div>
																</div>
																<div class="post-box"> <span class="text-muted text-small"><i class="fa fa-clock-o" aria-hidden="true"></i>
																		53 minutes ago</span>
																	<div class="post-img"><img src="../assets/img/slider/fullimage3.jpg" class="img-responsive" alt=""></div>
																	<div>
																		<h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
																		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
																			the industry's standard dummy text ever since the 1500s, </p>
																		<p> <a href="#" class="btn btn-raised btn-info btn-sm"><i class="fa fa-heart-o" aria-hidden="true"></i>
																				Like (5) </a> <a href="#" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i>
																				Reply</a> </p>
																	</div>
																</div>
																<div class="col-lg-12 p-t-20 text-center">
																	<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Load
																		More</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
						</div>
					</div>
				</div>
				<!-- end page content -->
				<!-- start chat sidebar -->
				<div class="chat-sidebar-container" data-close-on-body-click="false">
					<div class="chat-sidebar">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i class="material-icons">chat</i>Chat
									<span class="badge badge-danger">4</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i class="material-icons">settings</i>
									Settings
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<!-- Start User Chat -->
							<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
								<div class="chat-sidebar-list">
									<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
										<div class="chat-header">
											<h5 class="list-heading">Online</h5>
										</div>
										<ul class="media-list list-items">
											<li class="media"><img class="media-object" src="../assets/img/prof/prof3.jpg" width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">John Deo</h5>
													<div class="media-heading-sub">Spine Surgeon</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-success">5</span>
												</div> <img class="media-object" src="../assets/img/prof/prof1.jpg" width="35" height="35" alt="...">
												<i class="busy dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Rajesh</h5>
													<div class="media-heading-sub">Director</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="../assets/img/prof/prof5.jpg" width="35" height="35" alt="...">
												<i class="away dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jacob Ryan</h5>
													<div class="media-heading-sub">Ortho Surgeon</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-danger">8</span>
												</div> <img class="media-object" src="../assets/img/prof/prof4.jpg" width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Kehn Anderson</h5>
													<div class="media-heading-sub">CEO</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="../assets/img/prof/prof2.jpg" width="35" height="35" alt="...">
												<i class="busy dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Sarah Smith</h5>
													<div class="media-heading-sub">Anaesthetics</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="../assets/img/prof/prof7.jpg" width="35" height="35" alt="...">
												<i class="online dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Vlad Cardella</h5>
													<div class="media-heading-sub">Cardiologist</div>
												</div>
											</li>
										</ul>
										<div class="chat-header">
											<h5 class="list-heading">Offline</h5>
										</div>
										<ul class="media-list list-items">
											<li class="media">
												<div class="media-status">
													<span class="badge badge-warning">4</span>
												</div> <img class="media-object" src="../assets/img/prof/prof6.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jennifer Maklen</h5>
													<div class="media-heading-sub">Nurse</div>
													<div class="media-heading-small">Last seen 01:20 AM</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="../assets/img/prof/prof8.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Lina Smith</h5>
													<div class="media-heading-sub">Ortho Surgeon</div>
													<div class="media-heading-small">Last seen 11:14 PM</div>
												</div>
											</li>
											<li class="media">
												<div class="media-status">
													<span class="badge badge-success">9</span>
												</div> <img class="media-object" src="../assets/img/prof/prof9.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Jeff Adam</h5>
													<div class="media-heading-sub">Compounder</div>
													<div class="media-heading-small">Last seen 3:31 PM</div>
												</div>
											</li>
											<li class="media"><img class="media-object" src="../assets/img/prof/prof10.jpg" width="35" height="35" alt="...">
												<i class="offline dot"></i>
												<div class="media-body">
													<h5 class="media-heading">Anjelina Cardella</h5>
													<div class="media-heading-sub">Physiotherapist</div>
													<div class="media-heading-small">Last seen 7:45 PM</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="chat-sidebar-item">
									<div class="chat-sidebar-chat-user">
										<div class="page-quick-sidemenu">
											<a href="javascript:;" class="chat-sidebar-back-to-list">
												<i class="fa fa-angle-double-left"></i>Back
											</a>
										</div>
										<div class="chat-sidebar-chat-user-messages">
											<div class="post out">
												<img class="avatar" alt="" src="../assets/img/dp.jpg" />
												<div class="message">
													<span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
													<span class="body-out"> could you send me menu icons ? </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
												<div class="message">
													<span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
													<span class="body"> please give me 10 minutes. </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../assets/img/dp.jpg" />
												<div class="message">
													<span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
													<span class="body-out"> ok fine :) </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
												<div class="message">
													<span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
													<span class="body">Sorry for
														the delay. i sent mail to you. let me know if it is ok or not.</span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../assets/img/dp.jpg" />
												<div class="message">
													<span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
													<span class="body-out"> it is perfect! :) </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../assets/img/dp.jpg" />
												<div class="message">
													<span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
													<span class="body-out"> Great! Thanks. </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
												<div class="message">
													<span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
													<span class="body"> it is my pleasure :) </span>
												</div>
											</div>
										</div>
										<div class="chat-sidebar-chat-user-form">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Type a message here...">
												<div class="input-group-btn">
													<button type="button" class="btn deepPink-bgcolor">
														<i class="fa fa-arrow-right"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End User Chat -->
							<!-- Start Setting Panel -->
							<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
								<div class="chat-sidebar-settings-list slimscroll-style">
									<div class="chat-header">
										<h5 class="list-heading">Layout Settings</h5>
									</div>
									<div class="chatpane inner-content ">
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Sidebar Position</div>
												<div class="setting-set">
													<select class="sidebar-pos-option form-control input-inline input-sm input-small ">
														<option value="left" selected="selected">Left</option>
														<option value="right">Right</option>
													</select>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Header</div>
												<div class="setting-set">
													<select class="page-header-option form-control input-inline input-sm input-small ">
														<option value="fixed" selected="selected">Fixed</option>
														<option value="default">Default</option>
													</select>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Sidebar Menu </div>
												<div class="setting-set">
													<select class="sidebar-menu-option form-control input-inline input-sm input-small ">
														<option value="accordion" selected="selected">Accordion</option>
														<option value="hover">Hover</option>
													</select>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Footer</div>
												<div class="setting-set">
													<select class="page-footer-option form-control input-inline input-sm input-small ">
														<option value="fixed">Fixed</option>
														<option value="default" selected="selected">Default</option>
													</select>
												</div>
											</div>
										</div>
										<div class="chat-header">
											<h5 class="list-heading">Account Settings</h5>
										</div>
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Notifications</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
															<input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Show Online</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
															<input type="checkbox" id="switch-7" class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Status</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
															<input type="checkbox" id="switch-2" class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">2 Steps Verification</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
															<input type="checkbox" id="switch-3" class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="chat-header">
											<h5 class="list-heading">General Settings</h5>
										</div>
										<div class="settings-list">
											<div class="setting-item">
												<div class="setting-text">Location</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
															<input type="checkbox" id="switch-4" class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Save Histry</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
															<input type="checkbox" id="switch-5" class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
											<div class="setting-item">
												<div class="setting-text">Auto Updates</div>
												<div class="setting-set">
													<div class="switch">
														<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
															<input type="checkbox" id="switch-6" class="mdl-switch__input" checked>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end chat sidebar -->
			</div>
			<!-- end page container -->
			<!-- start footer -->
			<div class="page-footer">
				<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
					<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
				</div>
				<div class="scroll-to-top">
					<i class="icon-arrow-up"></i>
				</div>
			</div>
			<!-- end footer -->
		</div>
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>

	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>

</html>