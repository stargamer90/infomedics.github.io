<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color:#0099cc;">
	
	<div class="limiter">
		<div class="container-login100" style="background-color:#008B8B";>
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="logo.png" alt="IMG" height="300px">
				</div>

				<form class="login100-form validate-form"  method="post" >
					<span class="login100-form-title">
						 Forgot Password!
					</span>

				
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
					<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
						<input class="input100" type="email" name="username" id="uname" placeholder=" Email">
						<span class="focus-input100"></span>
						
					</div>
					
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" name="submit">
							Reset<a href="reset.php"></a>
						</button>
					</div>
					
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>