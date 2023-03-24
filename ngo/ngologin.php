<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Forms :: w3layouts</title>
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
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
<style>
body{background-color:#20B2AA;}

</style>
</head> 
<body >
 <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
							<!--//outer-wp-->
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
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


								<div class="outter-wp">
											<!--/sub-heard-part-->
											 
											<form method="post">
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main" width="50">
													
														
																			 <div class="set-3">
																				<div class="graph-2 general">
																					<h3 class="inner-tittle two" ><b>Sign In</b></h3>
																						<div class="grid-1">
											<form action="#" method="post">
			<div class="username" >
				<span class="username">NGO Name:</span>
				<input type="text" name="ngoname" class="name" placeholder="" required="" size="20">
				<div class="clearfix"></div>
			</div><br>
			<div class="password-agileits">
				<span class="username">Password:  </span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div><br>
			<div class="password-agileits">
				<span class="username">Registration Id:</span>
				<input type="text" name="regid" class="regid" placeholder="" required="">
				<div class="clearfix"></div>
			</div><br>
			<div class="rem-for-agile">
				<a href="reset.php">Reset Password</a><br>
			</div>
			<div class="rem-for-agile" >
				<a href="forget.php">Forgot Password</a><br>

			</div><br>
							
			<div class="login-w3">
					<button type ="button"  name="SignIn" value="Sign In" style="width:200px; background-color:#191970; margin-left:150px; color:#E0FFFF; font-size:20px"> Sign In </button>
			</div>
			<div class="clearfix"></div>
		</form>
				<div class="back" >
					<a href="index.php">Back to home</a>
				</div>
																									
																									
																								</form>
																						</div>
																				</div>
																			</div>
																			<!--//set-3-->
																			
																		   <!--//set-4-->
																		</div>
																	<!--//forms-inner-->
																</div> 
														<!--//forms-->											   
												</div>
											<!--//outer-wp-->
									 
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
			
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>





