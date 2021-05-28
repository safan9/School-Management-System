<?php
	session_start();

	require_once("scripts/db_connection.php");
	//checking if admin already logged in or not 
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:login.php");
	}

?>

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
	<link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!--favicon-->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />

	<!-- Jquery-->
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script>
					
					$(document).ready(function(){
						//alert("ready");
						//initially hiding all error messages.
						$("#errFname").hide();
						$("#errMname").hide();
						$("#errLname").hide();
						$("#errDesignation").hide();
						$("#errQualification").hide();
						$("#errExperience").hide();
						$("#errAddress").hide();
						$("#errMobile_no").hide();
						$("#errEmail").hide();
						$("#errSalary").hide();
						$("#errDOJ").hide();
						$("#errDOB").hide();
						$("#errPassword").hide();
						$("#errConfirm_password").hide();
						$("#errPhoto").hide();

						//setting error for each field to false.
						var errFname = false;
						var errMname = false;
						var errLname = false;
						var errDesignation = false;
						var errQualification = false;
						var errExperience = false;
						var errAddress = false;
						var errMobile_no = false;
						var errEmail = false;
						var errSalary = false;
						var errDOJ = false;
						var errDOB = false;
						var errPassword = false;
						var errConfirm_password = false;
						var errPhoto = false;

						//checking for error on focus-out.
						$("#first_name").focusout(function(){
							check_fname();
						});
						$("#middle_name").focusout(function(){
							check_mname();
						});
						$("#last_name").focusout(function(){
							check_lname();
						});
						$("#designation").focusout(function(){
							check_designation();
						});
						$("#qualification").focusout(function(){
							check_qualification();
						});
						$("#experience").focusout(function(){
							check_experience();
						});
						$("#address").focusout(function(){
							check_address();
						});
						$("#number").focusout(function(){
							check_mobile_number();
						});
						$("#email").focusout(function(){
							check_email();
						});
						$("#salary").focusout(function(){
							check_salary();
						});
						$("#doj").focusout(function(){
							//check_doj();
						});
						$("#dob").focusout(function(){
							//check_dob();
						});
						$("#password").focusout(function(){
							check_password();
						});
						$("#confirm_password").focusout(function(){
							check_confirm_password();
						});
						$("#photo").focusout(function(){
							//check_photo();
						});

						//function for validation.
						function check_fname(){
							var fname_length = $("#first_name").val().length;

							if(fname_length < 5 || fname_length > 20){
								$("#errFname").html("First Name Should be between 5-20 Characters");
								$("#errFname").show();
								errFname = true;
							}else{
								$("#errFname").hide();
								errFname = false;
							}
						}

						function check_mname(){
							var mname_length = $("#middle_name").val().length;

							if(mname_length < 5 || mname_length > 20){
								$("#errMname").html("Middle Name Should be between 5-20 Characters");
								$("#errMname").show();
								errMname = true;
							}else{
								$("#errMname").hide();
								errMname = false;
							}
						}

						function check_lname(){
							var lname_length = $("#last_name").val().length;

							if(lname_length < 4 || lname_length > 20){
								$("#errLname").html("Last Name Should be between 5-20 Characters");
								$("#errLname").show();
								errLname = true;
							}else{
								$("#errLname").hide();
								errLname = false;
							}
						}

						function check_designation(){
							var designation_length = $("#designation").val().length;

							if(designation_length < 5 || designation_length > 20){
								$("#errDesignation").html("Designation Should be between 5-20 Characters");
								$("#errDesignation").show();
								errDesignation = true;
							}else{
								$("#errDesignation").hide();
								errDesignation = false;
							}
						}

						function check_qualification(){
							var qualification_length = $("#qualification").val().length;

							if(qualification_length < 5 || qualification_length > 50){
								$("#errQualification").html("Qualification Should be between 5-50 Characters");
								$("#errQualification").show();
								errQualification = true;
							}else{
								$("#errQualification").hide();
								errQualification = false;
							}
						}

						function check_experience(){
							var exp_length = $("#experience").val().length;

							if(exp_length < 5 || exp_length > 20){
								$("#errExperience").html("Experience Should be between 5-20 Characters");
								$("#errExperience").show();
								errExperience = true;
							}else{
								$("#errExperience").hide();
								errExperience = false;
							}
						}

						function check_address(){
							var address_length = $("#address").val().length;

							if(address_length < 5 || address_length > 20){
								$("#errAddress").html("Address Should be between 5-20 Characters");
								$("#errAddress").show();
								errAddress = true;
							}else{
								$("#errAddress").hide();
								errAddress = false;
							}
						}

						function check_mobile_number(){
							var mobile_no_length = $("#number").val().length;

							if(mobile_no_length != 10){
								$("#errMobile_no").html("Enter Valid Mobile Number");
								$("#errMobile_no").show();
								errMobile_no = true;
							}else{
								$("#errMobile_no").hide();
								errMobile_no = false;
							}
						}

						function check_email(){
							var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-z0-9.-]+\.[a-zA-Z]{2,4}$/i);

							if(pattern.test($("#email").val())){
								$("#errEmail").hide();
								errEmail = false;
							}else{
								$("#errEmail").html("Invalid Email Address");
								$("#errEmail").show();
								errEmail = true;
							}
						}

						function check_salary(){
							var salary_length = $("#salary").val().length;

							if(salary_length < 4){
								$("#errSalary").html("Enter Valid salary amount");
								$("#errSalary").show();
								errSalary = true;
							}else{
								$("#errSalary").hide();
								errSalary = false;
							}
						}

						function check_password(){
							var password_length = $("#password").val().length;

							if(password_length < 8){
								$("#errPassword").html("Password must be greater than 8 character");
								$("#errPassword").show();
								errPassword = true;
							}else{
								$("#errPassword").hide();
								errPassword = false;
							}
						}

						function check_confirm_password(){
							var password = $("#password").val();
							var confirm_password = $("#confirm_password").val();

							if(password != confirm_password){
								$("#errConfirm_password").html("Password does not match");
								$("#errConfirm_password").show();
								errConfirm_password = true;
							}else{
								$("#errConfirm_password").hide();
								errConfirm_password = false;
							}
						}




						//checking for validation on submit click.
						$("#btn-submit").click(function(){

							check_fname();
							check_mname();
							check_lname();
							check_designation();
							check_qualification();
							check_experience();
							check_address();
							check_mobile_number();
							check_email();
							check_salary();
							check_password();
							check_confirm_password();

							if(errFname == false && errMname == false && errLname == false && errDesignation == false && errQualification == false && errExperience == false && errAddress == false && errMobile_no == false && errEmail == false && errSalary == false && errPassword == false && errConfirm_password == false){
								return true;
							}else{
								return false;
							}
						
						});
					});
				</script>
			<!-- Form Validation Ends-->
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
	<div class="page-wrapper">
		<!-- start header -->
		<?php
			include("layout/header.php");
		?>
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
			<?php
			include("layout/sidebar_menu.php");
		?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Professor</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Professor</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Professor</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Basic Information</header>
									<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
									</ul>
								</div>
								<div class="card-body" id="bar-parent">
									<form action="scripts/addStaff.php" method="POST" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">First Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="first_name" id="first_name" placeholder="enter first name" class="form-control input-height" />
													<div id="errFname" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Middle Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="middle_name" id="middle_name" placeholder="enter middle name" class="form-control input-height" />
													<div id="errMname" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Last Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="last_name" id="last_name" placeholder="enter last name" class="form-control input-height" />
													<div id="errLname"class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Gender
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="gender">
														<option value="male">Male</option>
														<option value="female">Female</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Designation
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="designation" id="designation" placeholder="enter designation" class="form-control input-height" />
													<div id="errDesignation" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Qualification
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="qualification" id="qualification" placeholder="enter qualification" class="form-control input-height" />
													<div id="errQualification" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Past Experience
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="experience" id="experience" placeholder="enter experience" class="form-control input-height" />
													<div id="errExperience" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea name="address" name="address" id="address" placeholder="address" class="form-control-textarea" rows="5"></textarea>
													<div id="errAddress" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="number" id="number" type="text" placeholder="mobile number" class="form-control input-height" /> 
													<div id="errMobile_no" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Email
												</label>
												<div class="col-md-5">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="email" class="form-control input-height" name="email"    id="email" placeholder="Email Address"> 
														<div id="errEmail" class="text-danger"></div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Salary
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="salary" id="salary" type="text" placeholder="Salary" class="form-control input-height" /> 
													<div id="errSalary" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Joining Date
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													
														<input class="form-control input-height" placeholder="Joining Date" type="date" id="doj" name="doj">
														<div id="errDOJ" class="text-danger"></div>
													
												</div>
											</div>
											
											
											<div class="form-group row">
												<label class="control-label col-md-3">Birth Date
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													
														<input class="form-control input-height" placeholder="Birth Date" type="date" name="dob" id="dob">
														<div id="errDOB" class="text-danger"></div>
													
												</div>
											</div>
											
											<div class="form-group row">
												<label class="control-label col-md-3">Password
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="password" name="password" id="password" placeholder="enter Password" class="form-control input-height" />
													<div id="errPassword" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Confirm Password
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="password" name="confirm_password" id="confirm_password"  placeholder="Reenter your password" class="form-control input-height" />
													<div id="errConfirm_password" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Profile Picture
												</label>
												<div class="compose-editor">
													<input type="file" name="photo" id="photo" class="default" />
													<div id="errPhoto" class="text-danger"></div>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<input type="submit" id="btn-submit" name="btn-submit" class="btn btn-info m-r-20" value="Add">
														<button type="reset" class="btn btn-default">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	
			<!-- end page content -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<?php
			include("layout/footer.php");
		?>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script src="../assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>


	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script src="../assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js" charset="UTF-8"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/pages/validation/form-validation.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>

</html>