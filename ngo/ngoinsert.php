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
<title>Welfare Foundation || NGO</title>
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
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head> 
<body>
 <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
		<?php
		include("header.php");
		?>
						<!-- //header-ends -->
							<!--//outer-wp-->
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<?php require_once("..\config\connection.php");
							

if (isset($_POST['submit']))
{
    $ngoname   = $_POST['ngoname'];
    $ngoadd1  = $_POST['ngoadd1'];
	$ngoadd2  = $_POST['ngoadd2'];
    $ngodes = $_POST['ngodes'];
    $regid    = $_POST['regid'];
	$email  = $_POST['email'];
   $password      = $_POST['psswd'];
   $ngocont    = $_POST['ngocont'];
    $area_id      = $_POST['area_id'];
   


     $query = "INSERT INTO ngo (ngo_name, ngo_description,ngo_address1,ngo_address2,ngo_contact,ngo_password,ngo_emailid,registration_id,area_id) VALUES 
	 ('$ngoname', '$ngodes', '$ngoadd1','$ngoadd2','$ngocont' ,'$password','$email','$regid' ,'$area_id')";

if (mysqli_query($conn, $query)) {	
    echo "Record Inserted successfully";
	header("Location:ngo.php");
}
 else {
    echo "Error Inserted record: " . mysqli_error($conn);
}


}	 
	 
	
?>


								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="home.php">Home</a></li>
															<li class="active">Forms</li>
														</ol>
											</div>	
											<form method="post">
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main">
													
														
																			 <div class="set-3">
																				<div class="graph-2 general">
																					<h3 class="inner-tittle two">New NGO Form </h3>
																						<div class="grid-1">
																						   <form class="form-horizontal">
																									<div class="form-group">
																										<label class="col-md-2 control-label">NGO Name</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-users"></i>
																												</span>
																												<input type="text" name="ngoname" class="form-control1 icon" placeholder="Name" required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">NGO Address1</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-map-marker"></i>
																												</span>	
																												<input type="text" name="ngoadd1" class="form-control1 icon" id="exampleInputAddress1" placeholder="Address1" required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">NGO Address2</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-map-marker"></i>
																												</span>
																												<input type="text" name="ngoadd2" class="form-control1 icon" id="exampleInputAddress2" placeholder="Address2" required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">NGO Area</label>
																											<div class="col-sm-8"><select name="area_id" id="area_id" class="form-control1">
																												<?php 
																										$records = mysqli_query($conn,"SELECT * FROM area ");
																										while ($row = mysqli_fetch_array($records))
																										{
																												?>
																										<option value="<?php echo $row["area_id"]?>"><?php echo $row["area_name"];?></option>
																												<?php
		 
																										}
																												?>
																											</select>
																											</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">NGO Description</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-edit"></i>
																												</span>
																												<input type="text" name="ngodes" class="form-control1 icon" id="exampleInputDescription" required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Registration id</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-check-square-o"></i>
																												</span>
																												<input type="text" name="regid" class="form-control1 icon" id="exampleInputRegistrationid" placeholder="Registration id" required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Email Address</label>
																										<div class="col-md-8">
																											<div class="input-group input-icon right">
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input id="email" name="email" class="form-control1 icon" type="email" placeholder="Email Address" required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																										<div class="form-group">
																										<label class="col-md-2 control-label">NGO Contact</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-phone"></i>
																												</span>
																												<input type="tel" name="ngocont" class="form-control1 icon" id="exampleInputContact" placeholder="Contact" required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Password</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-lock"></i>
																												</span>
																												<input type="password" name="psswd" class="form-control1 icon" id="exampleInputPassword1" placeholder="Password" required>
																											</div>
																										</div>
																									</div>
																									
																									<br><br>
																									
																									
																									<button type ="submit" name="submit" value="send to database" style="width:1000px; background-color:#191970; margin-left:150px; color:#E0FFFF; font-size:20px"> Submit </button>
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
									 <!--footer section start-->
										<footer>
										   
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<?php
				include("sidebar.php");
				?>
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





