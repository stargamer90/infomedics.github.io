<?php require_once('C:\xampp\htdocs\welfare_foundation\ap\connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if( $email !='' && $password !='')
		{
			 $sql= "select admin_id,admin_emailid,admin_pass from admin where admin_emailid= '".$email."' and admin_pass='".$password."' and isActive = 1";
			
			$result=mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				
				session_start();
				$_SESSION["admin_emailid"] = $row['admin_id'];
				header("Location:../home.php");
			}
			else
			{
				
		echo "		<script>
						alert('Invalid Password!');
						window.location='../login/login.php';
					</script>";
	
			}
			
		}
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
						<img src="logo.jpg" alt="AVATAR" width="" height="130">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Welfare Foundation
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="email" name="email" placeholder=" Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
					
						<button class="login100-form-btn">
						<a href="../home.php">
							Login
						</button>
						</a><br>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="forgot.php" class="txt1">
							Forgot Password?
						</a><br>
						<a href="reset.php" class="txt1">
							Reset Password
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="#">
							Create new account
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