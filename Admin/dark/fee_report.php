<?php
	session_start();

	require_once("scripts/db_connection.php");
	//checking if admin already logged in or not 
	if(!isset($_SESSION["admin_id"]) && !isset($_SESSION["username"])){
		header("Location:login.php");
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
							<a href="http://radixtouch.in/templates/admin/smart/source/light/add_fees_bootstrap.html" data-theme="light"><span class="head"></span><span class="cont"></span></a>
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
								<div class="page-title">Fee Report:</div>
								<div class="page-title">Current Year:&nbsp; 
									<?php echo "<div class='badge badge-info'>".$row['year']."</div>"; ?>
								</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="home.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Reports</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Fee Report</li>
							</ol>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="form_area">
								<form name="Attendance_Report" method="POST">
									<div class="form-group">
										<label>
											Select Class:
										</label>
										<select name="class_id" id="class_id" class="form-control">
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
											<!-- * Fetch classes from DB. *-->
										</select>
									</div>
									<div class="form-group">
										<label for="division" >Select Division</label>
									 	<select name="division_id" id="division_id" class="form-control">
											<?php 
												echo fill_division($conn);
											?>
											<!-- * Fetch divion related to class from DB. *-->
										</select>
									</div>
									<div class="form-group">
										<label>
											Select Academic Year:
										</label>
										<div class="">
											<select name="academic_years" id="academic_years" class="form-control">
												<option value="0">--SELECT ACADEMIC YEAR--</option>
												<?php 
													$sql = "SELECT *
															FROM `academin_year_mst`";
													$res = mysqli_query($conn, $sql);

													if(mysqli_num_rows($res) > 0){
														while($year = mysqli_fetch_assoc($res)){
															if($year['status'] == 'active'){
																?>
																	<option value="<?php echo $year['year_id']; ?>">
																		<?php echo $year['year']; ?> <span class='badge badge-info'>Current</span>
																	</option>
																<?php
															}else{


															?>
															<option value="<?php echo $year['year_id']; ?>">
																<?php echo $year['year']; ?>
															</option>
															<?php

														
															}
														}
														
														?>
													</select>
														<?php		
														
													}
												?>
											
										</div>
									</div>
								</form>
							</div>
						</div>

						<div id="Attendance_Area">

						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					$("#class_id").change(function(){
						var class_id = $(this).val();
						//alert("ok");
						$.ajax({
							url: "load_divisions.php",
							method: "POST",
							dataType: "html", 
							data: {class_id:class_id},
							success: function(data){
								$("#division_id").html(data);
								//alert(data);
							}
						});
					});

					$("#academic_years").change(function(){
						//alert("ok");
						var year_id = $("#academic_years").find(":selected").val();
						var division_id = $("#division_id").find(":selected").val();

						$.ajax({
							url: "scripts/fetchFee_report.php",
							type: "POST",
							data: { 
									year_id: year_id,
									division_id: division_id
									},
							success: function(data){
								$("#Attendance_Area").html(data);
								$("#Attendance_Area").show();
							}
						});
					});

					$("#division_id").change(function(){
						//alert("ok");
						var year_id = $("#academic_years").find(":selected").val();
						var division_id = $("#division_id").find(":selected").val();

						$.ajax({
							url: "scripts/fetchFee_report.php",
							type: "POST",
							data: { 
									year_id: year_id,
									division_id: division_id
									},
							success: function(data){
								$("#Attendance_Area").html(data);
								$("#Attendance_Area").show();
							}
						});
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