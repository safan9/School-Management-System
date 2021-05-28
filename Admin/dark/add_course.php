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
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
	<!--jQuery-->
	<script src="js/jQuery.js"></script>
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
							<a href="http://radixtouch.in/templates/admin/smart/source/light/add_course.html" data-theme="light"><span class="head"></span><span class="cont"></span></a>
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
								<div class="page-title">Add Class</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Classes</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Class</li>
							</ol>
						</div>
					</div>
					<div class="card-body">
						<form action="scripts/addClass.php" method="POST" onsubmit="return validate_class()" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-body">
								<div class="form-group row">
									<label class="control-label col-md-3">Class Name
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<input type="text" name="class_name" id="class_name" placeholder="enter class name" class="form-control input-height" />
										<div id="errClass_name" class="text-danger"></div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<input type="submit" id="btn-class-submit" name="btn-class-submit" class="btn btn-info m-r-20" value="Add">
												<button type="reset" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>

						<hr />
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Division</div>
							</div>
						</div>
						<br/><br/><br/>

						<form action="scripts/addDivision.php" method="POST" onsubmit="return validate_division()" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-body">
								<div class="form-group row">
									<label class="control-label col-md-3">Division Name
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<input type="text" name="division_name" id="division_name" placeholder="enter division name" class="form-control input-height" />
										<div id="errDivision_name" class="text-danger"></div>
									</div>
								</div>

								<div class="form-group row">
									<label class="control-label col-md-3">Room Number
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<input type="text" name="room_no" id="room_no" placeholder="enter room no" class="form-control input-height" />
										<div id="errRoom_no" class="text-danger"></div>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Staff Name
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<select name="staff_name" class="form-control">
											<?php
												$sql = "SELECT * FROM staff_mst
														WHERE staff_id NOT IN(SELECT staff_id from division_mst)";
												$result = mysqli_query($conn, $sql);

												if(mysqli_num_rows($result) > 0){
													while($row = mysqli_fetch_assoc($result)){
														?>

														<option value=<?php echo $row['staff_id']; ?> >
															<?php echo $row['first_name']; ?>
														</option>

														<?php
													}

												}
											?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Class Name
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<select name="class_name" class="form-control">
											<?php
												$sql = "SELECT * FROM class_mst";
												$result = mysqli_query($conn, $sql);

												if(mysqli_num_rows($result) > 0){
													while($row = mysqli_fetch_assoc($result)){
														?>

														<option value=<?php echo $row['class_id']; ?> >
															<?php echo $row['class_name']; ?>
														</option>

														<?php
													}

												}
											?>
										</select>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<input type="submit" id="btn-submit" name="btn-division-submit" class="btn btn-info m-r-20" value="Add">
												<button type="reset" class="btn btn-default">Cancel</button>
											</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>


					
			<!-- end page content -->

			<script type="text/javascript">
				$(document).ready(function(){
					//validation for add class
					$("#errClass_name").hide();
					var errClass_name = false;

					$("#class_name").focusout(function(){
							check_class_name();
					});

					function check_class_name(){
						var class_name_length = $("#class_name").val().length;

						if(class_name_length < 5 || class_name_length > 20){
							$("#errClass_name").html("Class Name Should be between 5-20 Characters");
							$("#errClass_name").show();
							errClass_name = true;
						}else{
							$("#errClass_name").hide();
							errClass_name = false;
						}
					}

					function validate_class(){
						if(errClass_name == false)
							return true;
						else
							return false;
					}
					// validate division
					$("#errDivision_name").hide();
					$("#errRoom_no").hide();

					var errDivision_name = false;
					var errRoom_no = false;

					$("#division_name").focusout(function(){
						check_division_name();
					});

					$("#room_no").focusout(function(){
						check_room_no();
					});

					function check_division_name(){
						var division_name_length = $("#division_name").val().length;

						if(division_name_length < 5 || division_name_length > 20){
							$("#errDivision_name").html("Division Name Should be between 5-20 Characters");
							$("#errDivision_name").show();
							errDivision_name = true;
						}else{
							$("#errDivision_name").hide();
							errDivision_name = false;
						}
					}

					function check_room_no(){
						var room_no_length = $("#division_name").val().length;

						if(room_no_length < 5 || room_no_length > 20){
							$("#errRoom_no").html("Room Number Should Not be empty!");
							$("#errRoom_no").show();
							errRoom_no = true;
						}else{
							$("#errRoom_no").hide();
							errRoom_no = false;
						}
					}

					function validate_division(){
						if(errDivision_name == false && errRoom_no == false)
							return true;
						else
							return false;
					}


				});
			</script>
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
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<script src="../assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
	<!-- dropzone -->
	<script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- end js include path -->
</body>

</html>