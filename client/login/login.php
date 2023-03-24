<?php require_once('C:\xampp\htdocs\welfare_foundation\config\connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if( $email !='' && $password !='')
		{
			 $sql= "select donor_id,donor_emailid,donor_password from donor where donor_emailid= '".$email."' and donor_password='".$password."' and isActive = 1";
			
			$result=mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				
				session_start();
				$_SESSION["donor_emailid"] = $row['donor_id'];
				header("Location:../index.php");
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
						 Login
					</span>

					<div style="width:380px" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					
					<div class="container-login100-form-btn">
					<a href="../home.php">
						<button class="login100-form-btn" style="background-color:#008B8B; width:250px;margin-center:40px">
							Login
						</button>
					</div>
						
					<div class="text-center p-t-12">
					<a href="forgot1.php">
						<span class="txt1">
							Forgot Password?</a>
						</span>
						</a>
						
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
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