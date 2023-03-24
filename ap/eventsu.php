<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
require_once("../config/connection.php");
if(isset($_GET['id']))
	$id="";
{
$id = $_GET['id'];

$sql="SELECT * from events where event_id = '".$id."'";
$sql1="select *from area";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);


$row = mysqli_fetch_array($result);

}	
?>
<html>
<head>
<title>Admin Panel || Events</title>
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
		
			<?php include("header.php")?>
		<!-- header-ends		-->
			
							<!--//outer-wp-->
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<?php require_once("..\config\connection.php");
							
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["eventname"]) && isset($_POST["eventdes"]) && isset($_POST["venue"]) && isset($_POST["ngo_id"]) && isset($_POST["donor_id"]) && isset($_POST["area_id"]) )
		{ 
			echo "value set";
		
			$eventname=$_POST["eventname"];
			$eventdes=$_POST["eventdes"];
			$venue=$_POST["venue"];
			$ngo_id=$_POST["ngo_id"];
			$donor_id=$_POST["donor_id"];
			
			$area_id = $_POST["area_id"];
			
		if($eventname!='' && $eventdes!='' && $venue!=''&& $donor_id!=''  && $area_id!='' && $ngo_id!='')
			{
				echo "value not null";
				$sql ="update events set event_name='".$eventname."',area_id='".$area_id."',
				event_description='".$eventdes."',venue='".$venue."',ngo_id='".$ngo_id."',donor_id='".$donor_id."',area_id='".$area_id."'
				  where event_id=$id";
			
				$result=mysqli_query($conn,$sql);
				

				//echo $result;
				
				if($result)	
				{	
					//header("Location:ngo.php");
					echo "<meta http-equiv='refresh' content='0;url=events.php'>";
				}
			}
		}
		else
		{
			echo "value not set";
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
																					<h3 class="inner-tittle two">Update Event Form </h3>
																						<div class="grid-1">
																						   <form class="form-horizontal" method="post">
																						   
																									
																									<div class="form-group">
																										<label class="col-md-2 control-label">Event Name</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-spinner"></i>
																												</span>
																												<input type="text" name="eventname" class="form-control1 icon" value=<?php echo $row['event_name']?>  required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Description</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-edit"></i>
																												</span>
																												<input type="text" name="eventdes" class="form-control1 icon" value=<?php echo $row['event_description']?>  required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Venue</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-map-marker"></i>
																												</span>
																												<input type="text" name="venue" class="form-control1 icon" id="exampleInputPassword1" value=<?php echo $row['venue']?> >
																											</div>
																										</div>
																									</div>
																									<br><br>
																									
																									
																									<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">Event Area</label>
																											<div class="col-sm-8"><select name="area_id" id="area_id" class="form-control1">
																												<?php 
																										$records2 = mysqli_query($conn,"SELECT * FROM area ");
																										while ($row2 = mysqli_fetch_array($records2))
																										{
																												?>
																										<option value="<?php echo $row2["area_id"]?>"><?php echo $row2["area_name"];?></option>
																												<?php
		 
																										}
																												?>
																											</select>
																											</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">Donor Name</label>
																											<div class="col-sm-8"><select name="donor_id" id="donor_id" class="form-control1">
																												<?php 
																										$records3 = mysqli_query($conn,"SELECT * FROM donor ");
																										while ($row3 = mysqli_fetch_array($records3))
																										{
																												?>
																										<option value="<?php echo $row3["donor_id"]?>"><?php echo $row3["donor_firstname"];?></option>
																												<?php
		 
																										}
																												?>
																											</select>
																											</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">NGO Name</label>
																											<div class="col-sm-8"><select name="ngo_id" id="ngo_id" class="form-control1">
																												<?php 
																										$records4 = mysqli_query($conn,"SELECT * FROM ngo");
																										while ($row4 = mysqli_fetch_array($records4))
																										{
																												?>
																										<option value="<?php echo $row4["ngo_id"]?>"><?php echo $row4["ngo_name"];?></option>
																												<?php
		 
																										}
																												?>
																											</select>
																											</div>
																									</div>
																									<br><br>
																									
																									
																									
																									
																									
																									<button type ="submit" name="submit" value="send to database" style="width:1000px; background-color:#191970; margin-left:150px; color:#E0FFFF; font-size:20px"> Submit </button>
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
							<form method="post">
							<button type ="submit" name="Back" value="send to database" style="width:100px; background-color:#191970; 
							margin-left:1432px; color:#E0FFFF; font-size:20px"> Back </button>
							</form>
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





