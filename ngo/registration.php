<?php require_once('../config/connection.php');
		
		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration </title>
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
			<div class="wrap-login100 p-t-40 p-b-30">
				<form class="login100-form validate-form" method="post">
					<div class="login100-form-avatar">
						<img src="logo.jpg" alt="AVATAR" height="130" width="">
					</div>

					<span class="login100-form-title p-t-10 p-b-20">
						Welfare Foundation
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder=" Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Id is required">
						<input class="input100" type="text" name="registration_id" placeholder=" Registration Id">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-graduation-cap"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Certificate is required" >
						<input class="input100" type="file" name="image" accept="image/*" onchange="loadFile(event)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-camera"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder=" Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder=" Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Address1 is required">
						<input class="input100" type="text" name="add1" placeholder=" Address1">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Address2 is required">
						<input class="input100" type="text" name="add2" placeholder=" Address2">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Contact is required">
						<input class="input100" type="contact" name="cont" accept="number/*" placeholder="Contact">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone"></i>
						</span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Description is required">
						<input class="input100" type="text" name="desc" placeholder="Description">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-edit"></i>
						</span>
					</div>
					
						<div class="container-login100-form-btn p-t-10">
					
						<button class="login100-form-btn">
						<a href="login.php">
							Login
						</button>
						</a><br>
					</div>

<br><br><br>
					
					<div class="text-center w-full">
						<a class="txt1" href="login.php">
						Already have an account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
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