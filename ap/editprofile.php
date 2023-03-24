
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require_once("..\config\connection.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel || Edit Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- ================= Favicon ================== -->
    <link rel="shortcut icon" href="logo.png">
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->

		<!-- //header-ends -->
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="home.php">Home</a></li>
										
										</ol>
									   </div>
								    <!--//sub-heard-part-->
										<!--/profile-->
										<h3 class="sub-tittle pro">Edit Profile</h3>
									       <div class="profile-widget">
														<img src="logo.png" height="120" width="120" alt=" " />
														<h2>Admin Panel</h2>
														<p>Admin</p>
													</div>
														<!--/profile-inner-->
														 <div class="profile-section-inner">
														       <div class="col-md-6 profile-info">
															   <form method="post">
																<div class="form-group">
																	<label class="col-md-6 control-label">Full Name:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-check-square-o"></i>
																				</span>
																	<input type="text" name="fname" class="form-control1 icon" required>
																			</div>
																		</div>
																</div>
																<br><br>
																<div class="form-group">
																	<label class="col-md-6 control-label">Mobile:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-phone"></i>
																				</span>
																	<input type="number" name="mobile" max="10" class="form-control1 icon" required>
																			</div>
																		</div>
																</div>
																<br><br>
																<div class="form-group">
																	<label class="col-md-6 control-label">Email:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-envelope"></i>
																				</span>
																	<input type="email" name="email" class="form-control1 icon" required>
																			</div>
																		</div>
																</div>
																<br><br>
															<button type ="submit" name="Edit" style="width:150px; background-color:#191970; margin-left:150px; color:#E0FFFF; font-size:20px">Edit </button>	
																 
														</form>		  
																
																
															  </div>
															   <div class="col-md-6 profile-info two">
															   
																		<div class="clearfix"></div>		
																	</div>
																</div>
																<!--/map-->
																<div class="clearfix"></div>
															</div>
															
											 	<!--//profile-inner-->
												<!--//profile-->
									</div>
									<!--//outer-wp-->
													
										
									 <!--footer section start-->
									
									<!--//footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php
			include("sidebar.php");
			?>
<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>