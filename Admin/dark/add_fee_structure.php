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
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
	<!-- Jquery-->
	<script type="text/javascript" src="js/jQuery.js"></script>
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
			<?php
				$sql = "SELECT * 
						FROM  `academin_year_mst` 
						WHERE  `status` =  'active'";
				$res = mysqli_query($conn, $sql);
				
					$row = mysqli_fetch_assoc($res);
				

			?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Fee Structure</div>
								<div class="page-title">Current Year:&nbsp; <?php echo $row['year']; ?></div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Fee Structure</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active"> Fee Structure</li>
							</ol>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="container ">
								<form action="scripts/addFeeStructure.php" name="notification_form" method="POST">
									<div class="from-body">
										<h4>Set Fee Structure Year</h4>
										<div class="form-group col-md-5">
											<label>Select Class: </label><br/>
											<div class="">
												<select name="class_name" class="form-control">
													<?php
														$sql = "SELECT * FROM class_mst";
														$result = mysqli_query($conn, $sql);

														if(mysqli_num_rows($result) > 0){
															while($row = mysqli_fetch_assoc($result)){
																if($row['class_id'] == $subject['class_id']){

																?>

																	<option value="<?php echo $row['class_id']; ?>" selected >
																		<?php echo $row['class_name']; ?>
																	</option>

																<?php
																}else{
																	?>

																		<option value="<?php echo $row['class_id']; ?>"  >
																			<?php echo $row['class_name']; ?>
																		</option>

																	<?php
																}
															}

														}
													?>
												</select>
											</div>
										</div>
										
										<div class="form-group col-md-5">
											<label>Enter Tuition Fee: </label>
											<input type="number" name="tuition_fee" id="tuition_fee" class="form-control" value="0" />
											<div id="errTuitionFee" class="text-danger"></div>
										</div>
										<div class="form-group col-md-5">
											<label>Enter Exam Fee: </label>
											<input type="number" name="exam_fee" id="exam_fee" class="form-control" value="0"/>
											<div id="errExamFee" class="text-danger"></div>
										</div>
										<div class="form-group col-md-5">
											<label>Enter Lab Fee: </label>
											<input type="number" name="lab_fee" id="lab_fee" class="form-control" value="0"/>
											<div id="errLabFee" class="text-danger"></div>
										</div>
										<div class="form-group col-md-5">
											<label>Enter Sports Fee: </label>
											<input type="number" name="sports_fee" id="sports_fee" class="form-control" value="0"/>
											<div id="errSportsFee" class="text-danger"></div>
										</div>
									</div>
									<div class="from-actions">
										<input type="submit" class="btn btn-primary btn-sm" name="btn-add-structure" id="add_structure" value="ADD" />
										<input type="reset" class="btn btn-sm" value="Cancel" />
									</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){

					var errTuitionFee = false;
					var errExamFee = false;
					var errLabFee = false;
					var errSportsFee = false;

					$("#errTuitionFee").hide();
					$("#errExamFee").hide();
					$("#errLabFee").hide();
					$("#errSportsFee").hide();
					

					$("#tuition_fee").focusout(function(){
						check_tuition_fee();
					});

					$("#exam_fee").focusout(function(){
						check_exam_fee();
					});

					$("#lab_fee").focusout(function(){
						check_lab_fee();
					});

					$("#sports_fee").focusout(function(){
						check_sports_fee();
					});

					function check_tuition_fee(){
						var tuition_fee = $("#tuition_fee").val();

						if(tuition_fee <= 0 || tuition_fee == ''){
							$("#errTuitionFee").html("Tuition Fee Must Not Empty or zero!");
							errTuitionFee = true;
							$("#errTuitionFee").show();
						}else{
							errTuitionFee = false;
							$("#errTuitionFee").hide();
						}
					}

					function check_exam_fee(){
						var exam_fee = $("#exam_fee").val();
						//alert(exam_fee);
						if(exam_fee <= 0 || exam_fee == ''){
							$("#errExamFee").html("Exam Fee Must Not Empty or zero!");
							errExamFee = true;
							$("#errExamFee").show();
						}else{
							errExamFee = false;
							$("#errExamFee").hide();
						}
					}

					function check_lab_fee(){
						var lab_fee = $("#lab_fee").val();

						if(lab_fee <= 0 || lab_fee == ''){
							$("#errLabFee").html("Lab Fee Must Not Empty or zero!");
							errLabFee = true;
							$("#errLabFee").show();
						}else{
							errLabFee = false;
							$("#errLabFee").hide();
						}
					}

					function check_sports_fee(){
						var sports_fee = $("#sports_fee").val();

						if(sports_fee <= 0 || sports_fee == ''){
							$("#errSportsFee").html("Sports Fee Must Not Empty or zero!");
							errSportsFee = true;
							$("#errSportsFee").show();
						}else{
							errSportsFee = false;
							$("#errSportsFee").hide();
						}
					}

					$("#btn-add-structure").click(function(){

						check_exam_fee();
						check_lab_fee();
						check_sports_fee();
						check_tuition_fee();

						if(errTuitionFee == false && errSportsFee == false && errLabFee == false && errExamFee == false)
							return true;
						else
							return false;
					
				});

			});
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
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script src="../assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
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