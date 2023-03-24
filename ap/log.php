
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require_once('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if( $email !='' && $password !='')
		{
			 $sql= "select ngo_id,ngo_emailid,ngo_password from ngo where ngo_emailid= '".$email."' and ngo_password='".$password."' and isActive = 1";
			
			$result=mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION["ngo_name"] = $row['ngo_id'];
				
				header("Location:home.php");
			}
			else
			{
				echo"Invalid password";
			}
			
		}
	}
}
		
		?>

<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													
													    <div class="login">
														<h3 class="inner-tittle t-inner">Login</h3>
																
																<form action="#" method="post">
																		<input type="text" class="name" name="email" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
																		<input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
																		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
																		
																		
																		<div class="clearfix"></div>
																		
																
																		<div class="rem-for-agile">
																		<a href="forgotPassword.php">Forgot Password</a><br>

																		</div>
																			<div class="rem-for-agile">
																			<a href="reset.php">Reset Password</a><br>
																			</div>
																			<div class="clearfix"></div>
																	
																	</form>
														</div>

														
													</div>
													
													
												<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>