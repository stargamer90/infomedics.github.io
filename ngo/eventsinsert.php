

<?php require_once("connection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>NGO || Events</title>
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
							
						

								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="home.php">Home</a></li>
															<li class="active">Forms</li>
														</ol>
											</div>	
											<form method="post" enctype="multipart/form-data">
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main">
													
														
																			 <div class="set-3">
																				<div class="graph-2 general">
																					<h3 class="inner-tittle two"> Events Form </h3>
																						<div class="grid-1">
																						   <form class="form-horizontal">
																									<div class="form-group">
																										<label class="col-md-2 control-label">Event Name</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-spinner"></i>
																												</span>
																												<input type="text" name="ename" class="form-control1 icon" placeholder=" Event Name" required>
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
																												<input type="text" name="edes" class="form-control1 icon" id="exampleInputAddress1" placeholder="Description" required>
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
																												<input type="text" name="venue" class="form-control1 icon" id="exampleInputAddress2" placeholder="Venue" required>
																											</div>
																										</div>
																									</div>
																									<br><br>
																														
							
																								
																									<br><br>
																									<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">Area</label>
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
																											<label for="selector1" class="col-sm-2 control-label">Donor Name</label>
																											<div class="col-sm-8">
																											<select name="donor_name" id="donor_name" class="form-control1">
																												<?php 
																												$records = mysqli_query($conn,"SELECT * FROM donor ");
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
																									<div class="form-group">
																										<label class="col-md-2 control-label">Image</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-map-marker"></i>
																												</span>
																												<input type="file" name="image" class="form-control1 icon" id="exampleInputAddress2" placeholder="Venue" required>
																											</div>
																										</div>
																									</div>
																									
																									
																									<button type ="submit" name="submit" value="send to database" style="width:1000px; background-color:#191970; 
																									margin-left:150px; color:#E0FFFF; font-size:20px"> Submit </button>
																			
																								
																								
																								</form>
																									<?php 
							

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_FILES['image'])  )
	{
	$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];
		$file_ext = explode('.',$_FILES['image']['name']);
		$expresion = array("jpeg","jpg","png");
    $ename  = $_POST['ename'];
    $edes= $_POST['edes'];
    $venue = $_POST['venue'];
//	$image = $_POST['image'];
	$area_id = $_POST['area_id'];
	$donor_name = $_POST['donor_name'];
 $ngo=$_SESSION['ngo_emailid'];
 $date=date('y-m-d');
    
  if(move_uploaded_file($file_tmp,"../images/".$file_name)==1)
		 {
			 

	$query = "INSERT INTO events (event_name,event_description,venue,area_id,donor_id,ngo_id,createddate,image) VALUES 
	 ( '$ename','$edes','$venue','$area_id','$donor_name','$ngo','$date','$file_name')";
//echo $query;
//die;

if (mysqli_query($conn, $query)) {	
   echo "		<script>
						alert('Record Inserted!!');
						window.location='../ngo/events.php';
					</script>";
	
}
 else {
    echo "Error Inserted record: " . mysqli_error($conn);
}

		 }
 }
}
?>

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
