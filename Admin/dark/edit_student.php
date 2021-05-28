<?php
	session_start();

	require_once("scripts/db_connection.php");
	//checking if admin already logged in or not 
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:login.php");
	}
	//getting student_id from queryString
	$student_id = $_GET["id"];
	//getting records from table for given student_id.
	$sql = "SELECT * FROM student_mst WHERE student_id = '$student_id'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
	}

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
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
	<!-- Jquery-->
	<script src="js/jQuery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#class").change(function(){
			var class_id = $(this).val();
			//alert("ok");
			$.ajax({
				url: "scripts/load_division.php",
				method: "POST",
				dataType: "html", 
				data: {class_id:class_id},
				success: function(data){
					$("#division").html(data);
					//alert(data);
				}
			});
					
		});
		
	});
</script>
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
									<form action="scripts/updateStudent.php?id=<?php echo $_GET["id"]; ?>" method="POST" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" onsubmit="return validate()">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">First Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="first_name" id="first_name" placeholder="enter first name" class="form-control input-height" value=<?php echo $row["fname"]; ?> >
													<div id="errFname" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Middle Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="middle_name" id="middle_name" placeholder="enter middle name" class="form-control input-height" value=<?php echo $row["mname"]; ?> >
													<div id="errMname" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Last Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="last_name" id="last_name" placeholder="enter last name" class="form-control input-height"
													 value=<?php echo $row["lname"]; ?> >
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
														<option value="female 2">Female</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3">Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="address" name="address" id="address" placeholder="address" class="form-control input-height"
														value=<?php echo $row["address"]; ?>>
													<div id="errAddress" class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="number" id="number" type="text" placeholder="mobile number" class="form-control input-height"
													value=<?php echo $row["mobile_no"]; ?> > 
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
														<input type="email" class="form-control input-height" name="email" id="email" placeholder="Email Address"
														value=<?php echo $row["email"]; ?>> 
														<div id="errEmail" class="text-danger"></div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												&nbsp;<label for="city" class="control-label col-md-3" >
												Select City</label>
												<div class="col-md-5">
					 								<select name="city" id="city" class="form-control">
													<?php 
														$sql = "SELECT * FROM city_mst";
														$res_cities = mysqli_query($conn, $sql);
								
														while($city = mysqli_fetch_assoc($res_cities)){
															?>
															<option value=<?php echo $city["city_id"];?> >
																<?php echo $city["city_name"];?>
															</option>
															<?php
														}
													?>
													<!-- *Fetching cities from DB. *-->
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Birth Date
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													
														<input class="form-control input-height" placeholder="Birth Date" type="date" name="dob" id="dob"
														value=<?php echo $row["dob"]; ?> >
														<div id="errDOB" class="text-danger"></div>
													
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Birth Place
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="birthplace" id="birthplace" placeholder="enter birthplace" class="form-control input-height"
													 value=<?php echo $row["birth_place"]; ?> >
													<div id="errBirthplace"class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Blood Group
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="blood_group" id="blood_group" placeholder="enter Blood Group" class="form-control input-height"
													 value=<?php echo $row["blood_group"]; ?> >
													<div id="errBloodgroup"class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Nationality
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="nationality" id="nationality" placeholder="enter nationality" class="form-control input-height"
													 value=<?php echo $row["nationality"]; ?> >
													<div id="errNationality"class="text-danger"></div>
												</div>
											</div>
											<div class="form-group row">
												&nbsp;<label for="cast" class="control-label col-md-3" >
												Select Cast</label>
												<div class="col-md-5">
					 								<select name="cast" id="cast" class="form-control">
													<?php 
														$sql = "SELECT * FROM cast_mst";
														$res_casts = mysqli_query($conn, $sql);
								
														while($cast = mysqli_fetch_assoc($res_casts)){
															?>
															<option value=<?php echo $cast["cast_id"];?> >
																<?php echo $cast["cast_name"];?>
															</option>
															<?php
														}
													?>
													<!-- *Fetching cities from DB. *-->
													</select>
												</div>
											</div>

											<div class="form-group row">
												&nbsp;<label for="class" class="control-label col-md-3" >
												Select Class</label>
												<div class="col-md-5">
					 								<select name="class" id="class" class="form-control">
													<?php 
														$sql = "SELECT * FROM class_mst";
														$res_classes = mysqli_query($conn, $sql);
								
														while($class = mysqli_fetch_assoc($res_classes)){
															?>
															<option value=<?php echo $class["class_id"];?> >
																<?php echo $class["class_name"];?>
															</option>
															<?php
														}
													?>
													<!-- *Fetching cities from DB. *-->
													</select>
												</div>
											</div>
											<div class="form-group row">
												&nbsp;<label for="division" class="control-label col-md-3" >
												Select Division</label>
												<div class="col-md-5">
					 								<select name="division" id="division" class="form-control">
														<?php 
															echo fill_division($conn);
														?>
														<!-- * Fetch divion related to class from DB. *-->
													</select>
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
														<input type="submit" id="btn-submit" name="btn-submit" class="btn btn-info m-r-20" value="UPDATE">
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
			<!-- Form Validation-->
			<script type="text/javascript">
				
						$("#errFname").hide();
						$("#errMname").hide();
						$("#errLname").hide();
						$("#errAddress").hide();
						$("#errMobile_no").hide();
						$("#errEmail").hide();
						$("#errDOB").hide();
						$("#errPhoto").hide();
						$("#errNationality").hide();
						$("#errBloodgroup").hide();
						$("#errBirthplace").hide();

						//setting error for each field to false.
						var errFname = false;
						var errMname = false;
						var errLname = false;
						var errAddress = false;
						var errMobile_no = false;
						var errEmail = false;
						var errDOB = false;
						var errPhoto = false;
						var errBirthplace = false;
						var errNationality = false;
						var errBloodgroup = false;

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
						$("#address").focusout(function(){
							check_address();
						});
						$("#number").focusout(function(){
							check_mobile_number();
						});
						$("#email").focusout(function(){
							check_email();
						});
						$("#birthplace").focusout(function(){
							check_birthplace();
						});
						$("#nationality").focusout(function(){
							check_nationality();
						});
						$("#blood_group").focusout(function(){
							check_blood_group();
						});
						$("#dob").focusout(function(){
							//check_dob();
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

						function check_nationality(){
							var nationality_length = $("#nationality").val().length;

							if(nationality_length < 5 || nationality_length > 20){
								$("#errNationality").html("Nationality Should be between 5-20 Characters");
								$("#errNationality").show();
								errAddress = true;
							}else{
								$("#errNationality").hide();
								errAddress = false;
							}
						}

						function check_blood_group(){
							var blood_group_length = $("#blood_group").val().length;

							if(blood_group_length < 1){
								$("#errBloodgroup").html("Blood Group Should not be empty");
								$("#errBloodgroup").show();
								errAddress = true;
							}else{
								$("#errBloodgroup").hide();
								errAddress = false;
							}
						}

						function check_birthplace(){
							var birthplace_length = $("#birthplace").val().length;

							if(birthplace_length < 5 || birthplace_length > 20){
								$("#errBirthplace").html("Birthplace Should be between 5-20 Characters");
								$("#errBirthplace").show();
								errAddress = true;
							}else{
								$("#errBirthplace").hide();
								errAddress = false;
							}
						}



						//checking for validation on submit click.
						function validate(){

							check_fname();
							check_mname();
							check_lname();
							check_address();
							check_mobile_number();
							check_email();
							check_nationality();
							check_birthplace();
							check_blood_group();

							if(errFname == false && errMname == false && errLname == false && errAddress == false && errMobile_no == false && errEmail == false && errNationality == false && errBirthplace == false && errBloodgroup == false){
								return true;
							}else{
								return false;
							}
						}
			</script>
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