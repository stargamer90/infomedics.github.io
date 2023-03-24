<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<html>
<?php
require_once("../config/connection.php");
if(isset($_GET['id']))
	$id="";

$id = $_GET['id'];

$sql="SELECT * from donation where donation_id = '".$id."'";
$sql1="select *from area";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);


$row = mysqli_fetch_array($result);
?>
<head>
<title>NGO || Donation</title>
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
							
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["amount"]) && isset($_POST["donor_id"]) )
		{ 
			echo "value set";
			
			$amount=$_POST["amount"];
			$donor_id=$_POST["donor_id"];
			
			
		if( $amount!='' && $donor_id!='')
			{
				echo "value not null";
				$sql ="update donation set amount='".$amount."',donor_id='".$donor_id."'
				where donation_id = '".$id."' ";
			
				$result3=mysqli_query($conn,$sql);
				

				echo $result3;
				
				if($result3)	
				{	
					header("Location:myselect.php");
										echo "		<script>
						alert('Record Updated !');
						window.location='../ngo/donation.php';
					</script>";	
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
																					<h3 class="inner-tittle two">Update Donor Form </h3>
																						<div class="grid-1">
																						   <form class="form-horizontal">
																									
																									<br><br>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Amount</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-money"></i>
																												</span>
																												<input type="text" name="amount" class="form-control1 icon" id="exampleInputRegistrationid"value=<?php echo $row['amount']?> required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">Donor Name</label>
																											<div class="col-sm-8"><select name="donor_id" id="donor_id" class="form-control1">
																												<?php 
																										$records = mysqli_query($conn,"SELECT * FROM donor");
																										while ($row = mysqli_fetch_array($records))
																										{
																												?>
																										<option value="<?php echo $row["donor_id"]?>"><?php echo $row["donor_firstname"];?></option>
																												<?php
		 
																										}
																												?>
																											</select>
																											</div>
																									</div>
																									<br><br>
																									
																										
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