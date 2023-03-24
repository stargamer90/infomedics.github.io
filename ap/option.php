<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
<?php require_once("..\config\connection.php");?>
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Tables :: w3layouts</title>
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
			<?php include("header.php")?>
					<!-- //header-ends -->
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="home.php">Home</a></li>
											<li class="active">Tables</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
											
												
										        </div>
												<h3 class="inner-tittle two">Registered User Data </h3>
												<a href="ngoinsert.php">Add New Record</a><br><br>
													<div class="graph">
														<div class="tables">
																<table class="table table-bordered"> 
																<thead> 
																
																<th>Update</th>
																<th>Action</th>
																
																</tr> 
																</thead>
																<tr>																
																<td>NGO</td>
																<td>
																	<a href="ngou.php?id=$row[ngo_id]">
			<img src="edit.jpg" height='25'></a></td>
																</tr>
																<tr>
																
																<td>Donor</td>
																<td>
			<a href="donoru.php?id=$row[donor_id]">
			<img src="edit.jpg" height='25'></a></td>
																</tr>
																<tr>
																
																<td>Donation</td>
																<td>
			<a href=\"donationu.php?id=$row[donation_id]\">
			<img src="edit.jpg" height='25'/></a></td>
																</tr>
																<td>Events</td>
																<td>
			<a href=\"eventsu.php?id=$row[events_id]\">
			<img src="edit.jpg" height='25'/></a></td>
																</tr>
																<td>Posts</td>
																<td>
			<a href=\"postsu.php?id=$row[post_id]\">
			<img src="edit.jpg" height='25'/></a></td>
																</tr>
																<tr>
																
																
																<td>Gallery</td>
																<td><a href=\"galleryu.php?id=$row[gallery_id]\">
			<img src="edit.jpg" height='25'></a>
			</td>
																</tr>









															
																<tbody> 
																


	
																</tbody>
																</table>
															</div>
												
													</div>
													
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
									 <!--footer section start-->
										
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php include("sidebar.php");?>		
							</div>
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