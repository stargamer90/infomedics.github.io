<?php require_once('../config/connection.php');
session_start();
require_once("../config/connection.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	$id=$_SESSION['admin_id'];
	$otp = $_POST['otp'];
	$nPass = $_POST['newpassword'];
	$cPass = $_POST['cpassword'];
	
	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	}
	
	$query = "update admin set otpused = 1, 
	admin_pass = '".$nPass."' where admin_emailid='".$id."' and 
	otp = '".$otp."' ";

	
	$result = mysqli_query($conn, $query);
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset !');
						window.location='../ap/login.php';
					</script>";
	
	
	}
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="post">
					<div class="login100-form-avatar">
						<img src="logo.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Welfare Foundation
					</span>
					<span class="txt1">
						Reset Password
					</span><br><br>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input type="text" class="input100" name="otp" placeholder="Enter OTP " required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-sign-in"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="newpassword" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="cpassword" placeholder=" Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					
					
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Submit<a href="login.php"></a>
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
	<script src="js/main.js"></script>

</body>
</html>