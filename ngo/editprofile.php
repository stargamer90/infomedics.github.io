
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require_once("..\config\connection.php");?>
<!DOCTYPE HTML>

<html>
<?php
require_once("../config/connection.php");

	session_start();
$id=$_SESSION['ngo_id'];
$sql="SELECT * from ngo where ngo_id = '".$id."'";
//echo $sql;
//die;
$sql1="select *from area";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);
?>
<head>
<title>NGO || Edit Profile</title>
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
<link rel="stylesheet" href=
"css/icon-font.min.css" type='text/css' />
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
						
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<?php require_once("..\config\connection.php");
							
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		
		if (isset($_POST["ngo_name"]) && isset($_POST["ngo_contact"])&& isset($_POST["ngo_emailid"]) && isset($_POST["ngo_address1"]) && isset($_POST["ngo_address2"]) && isset($_POST["ngo_description"])
			&& isset($_POST["area_name"]))
		{ 
			
			$ngo_name=$_POST["ngo_name"];
			$ngo_contact=$_POST["ngo_contact"];
			$ngo_emailid=$_POST["ngo_emailid"];
			$ngo_address1=$_POST["ngo_address1"];
			$ngo_address2=$_POST["ngo_address2"];
			$ngo_description=$_POST["ngo_description"];
			$area_name=$_POST["area_name"];
	
		if( $ngo_name!='' && $ngo_contact!='' && $ngo_emailid!='' && $ngo_address1!='' && $ngo_address2!='' && $ngo_description!='' && $area_name='')
			{
				echo "value not null";
				die;
				$sql ="update ngo set ngo_name='".$ngo_name."',ngo_contact='".$ngo_contact."',ngo_emailid='".$ngo_emailid."',ngo_address1='".$ngo_address1."'
				,ngo_address2='".$ngo_address2."',ngo_description='".$ngo_description."'
				where ngo_id = '".$id."' ";
			//echo $sql;
			//die;
				$result=mysqli_query($conn,$sql);
				

				echo $result;
				
				if($result)	
				{	
					
 echo "		<script>
						alert('Profile Edited!!!');
						window.location='editprofile.php';
					</script>";
				}
			}
		}
		else
		{
			echo "";
		}
	}
?>							<div class="outter-wp">
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
														<h2>NGO</h2>
														
													</div>
		<!--/profile-inner-->
														 <div class="profile-section-inner">
														       <div class="col-md-6 profile-info">
															   <form method="post">
																<div class="form-group">
																	<label class="col-md-3 control-label">NGO Name:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-check-square-o"></i>
																				</span>
																	<input type="text" name="admin_name" class="form-control1 icon" id="exampleInputRegistrationid" value="<?php echo $row['ngo_name']?>" required>
																			</div>
																		</div>
																</div>
																<br><br><br><br>
																<div class="form-group">
																	<label class="col-md-3 control-label">Contact:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-phone"></i>
																				</span>
																	<input type="number" name="admin_contact" class="form-control1 icon" id="exampleInputRegistrationid"value="<?php echo $row['ngo_contact']?>" required>
																			</div>
																		</div>
																</div>
																<br><br><br>
																<div class="form-group">
																	<label class="col-md-3 control-label">Email:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-envelope"></i>
																				</span>
																	<input type="email" name="admin_emailid" class="form-control1 icon" id="exampleInputRegistrationid"value="<?php echo $row['ngo_emailid']?>" required>
																			</div>
																		</div>
																</div>
																<br><br><br>
																
																<div class="form-group">
																	<label class="col-md-3 control-label">Address1:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-envelope"></i>
																				</span>
																	<input type="email" name="admin_emailid" class="form-control1 icon" id="exampleInputRegistrationid"value="<?php echo $row['ngo_address1']?>" required>
																			</div>
																		</div>
																</div>
																<br><br><br>
																
																<div class="form-group">
																	<label class="col-md-3 control-label">Address2:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-envelope"></i>
																				</span>
																	<input type="email" name="admin_emailid" class="form-control1 icon" id="exampleInputRegistrationid"value="<?php echo $row['ngo_address2']?>" required>
																			</div>
																		</div>
																</div>
																<br><br><br>
																<div class="form-group">
																	<label class="col-md-3 control-label">Description:</label>
																		<div class="col-md-8">
																			<div class="input-group">
																				<span class="input-group-addon">
																				<i class="fa fa-envelope"></i>
																				</span>
																	<input type="email" name="admin_emailid" class="form-control1 icon" id="exampleInputRegistrationid"value="<?php echo $row['ngo_description']?>" required>
																			</div>
																		</div>
																</div>
																<br><br><br>
																
															<button type="submit" name="edit" style="background-color:#FFFF; font-size:20px; margin-left:200px; width:150px; color:#0099cc;">
																			Edit
																			</button>
																			<br>	
																 
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