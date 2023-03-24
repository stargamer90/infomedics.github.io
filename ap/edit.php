
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
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Profile :: w3layouts</title>
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
											<li class="active">Profile</li>
										</ol>
									   </div>
								    <!--//sub-heard-part-->
										<!--/profile-->
										<h3 class="sub-tittle pro">Profile</h3>
									       <div class="profile-widget">
														<img src="logo.jpg" height="120" width="120" alt=" " />
														<h2>Admin Panel</h2>
														<p>Admin</p>
													</div>
														<!--/profile-inner-->
														 <div class="profile-section-inner">
														       <div class="col-md-6 profile-info">
																	<h3 class="inner-tittle">Personal Information </h3>
																	<div class="main-grid3">
																                   <form method="post">
                   <div class="row">
                       <div class="col-sm-6">
					   	<strong>Full Name</strong>
                           <div class="single-input-box">
                                <input type="text" placeholder="Name" name="name" class="form-control">
                            </div><br><br>
                       </div><br><br>
					    <div class="col-sm-6">
							<strong>Mobile Number</strong>
                           <div class="single-input-box">
                               <input type="tel" placeholder="Mobile Number" name="contact" class="form-control">

                           </div>
                       </div><br><br>
                       <div class="col-sm-6">
					   	<strong>Email ID</strong>
                           <div class="single-input-box">
                               <input type="email" placeholder="Email ID" name="emailid" class="form-control">

                           </div>
                       </div>
                   </div><br><br>
				   <div class="about-info-p m-b-0">
						<strong>Location</strong>
								<br>
						<p class="text-muted">Ahmedabad, India</p>
					</div>
																												
<button type ="submit" name="submit" value="send to database" style="width:150px; background-color:#191970; margin-left:150px; color:#E0FFFF; font-size:20px"> Submit </button>	
										</form>
																			</div>
																</div>
																    </div>
															  </div>
																</div>																
                               
							   	<?php require_once("..\config\connection.php");
							

if (isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$email = $_POST['emailid'];
	$message = $_POST['message'];
 $ngo_name= $_POST['ngo_name'];
     $query = "INSERT INTO contact (visitor_name,visitor_emailid,message,ngo_id) VALUES 
	 ( '".$name."','".$email."','".$message."','".$ngo_name."')";

if (mysqli_query($conn, $query)) {	
    echo "Record Inserted successfully";
} else {
    echo "Error Inserted record: " . mysqli_error($conn);
}

 }
?>
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