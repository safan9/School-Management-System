
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="../assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
	<!-- Jquery -->
	<script type="text/javascript" src="js/jQuery.js"></script>
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  method="POST">
					<span class="login100-form-logo">
						<img alt="" src="../assets/img/logo-2.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" id="username" name="username" placeholder="Username">
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
					</div>
					<span class=" p-b-34 p-t-27">
						<div class="text-center text-danger" id="errorLogin"></div>
					</span>
					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" value="Login" id="btn-login" name="btn-login" />
					</div>
					
				
					
					<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){

		$("#errorLogin").hide();
		$("#btn-login").click(function(e){
			e.preventDefault();

			var username = $("#username").val();
			var pass = $("#password").val();

			$.ajax({
				url: "scripts/login_admin.php",
				type: "POST",
				data:{
					username: username, 
					password: pass
				},
				success:function(data){
					$("#errorLogin").html(data);
					$("#errorLogin").show();
					$("#username").focus();

					if(data == '1redirect'){
						location.href = "home.php";
					}
				}
			});
		});
	});
</script>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/pages/extra-pages/pages.js"></script>
	<!-- end js include path -->
</body>

</html>