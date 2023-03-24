<?php 
session_start();
require_once('C:\xampp\htdocs\welfarefoundation\config\connection.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	$id=$_SESSION['ngo_id'];
	$otp = $_POST['otp'];
	$npass = $_POST['newpassword'];
	$cpass = $_POST['cpassword'];
	
	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	} 		
	
	$query = "update ngo set otp_used = 1, 
	ngo_password = '".$npass."' ,where ngo_emailid='".$id."' and 
	otp = '".$otp."' ";

	
	$result = mysqli_query($conn, $query);
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset !');
						window.location='../ngo/login/login.php';
					</script>";
	
	
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset </title>
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
					<img src="logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"  method="post">
					<span class="login100-form-title">
					Reset
					</span>


					<div style="width:380px" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="otp" placeholder="Enter OTP">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-external-link" aria-hidden="true"></i>
						</span>
					</div>

					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="npass" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="cpass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					
					<div class="container-login100-form-btn">
					<a href="../home.php">
						<button class="login100-form-btn" style="background-color:#008B8B; width:250px;margin-center:100px">
							Login
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