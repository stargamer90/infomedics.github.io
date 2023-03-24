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
<title>NGO || Gallery</title>
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
						<!-- //header-ends -->
							<!--//outer-wp-->
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<?php require_once("..\config\connection.php");
							

if (isset($_POST['submit']))
{
   // $galleryid  = $_POST['galleryid'];
    $image  = $_POST['image'];
	
    $query = "INSERT INTO gallery (image_path) VALUES 
	 ('$image')";

if (mysqli_query($conn, $query)) {	
   echo "		<script>
						alert('Record Inserted!!');
						window.location='../ap/gallery.php';
					</script>";
	
}
 else {
    echo "Error Inserted record: " . mysqli_error($conn);
}


}
	 
?>
<?php
require_once("../config/connection.php");


if($_SERVER["REQUEST_METHOD"]=="POST")
{
   if(isset($_FILES['image']) && $_POST['gallery_id'] && isset($_POST['ngo_id']))
   {
		
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
	  $des = $_POST['image_description'];
	  $cat = $_POST['txtcategory'];
	  
         if(move_uploaded_file($file_tmp,"../../../Images/".$file_name)==1)
		 {
			 $query="INSERT INTO gallery(gallery_id,image_path,ngo_id) 
			 values('".$file_name."','".$des."','".$cat."')";
				echo "Success";
				$result=mysqli_query($conn,$query);
				
				if($result)
				{
					header("Location:gallery.php");
				}
				
		 }
      
	  else{
         echo "error";
      }
   }
}
  
?>

								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href=".home.php">Home</a></li>
															<li class="active">Forms</li>
														</ol>
											</div>	
											<form method="post">
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main">
													
														
																			 <div class="set-3">
																				<div class="graph-2 general">
																					<h3 class="inner-tittle two">New Gallery Form </h3>
																						<div class="grid-1">
																						   <form class="form-horizontal">
																									
																									<div class="form-group">
																										<label class="col-md-2 control-label">Image</label>
																										<div class="col-sm-8">
						
																											<span class="btn btn-green fileinput-button">
																												
																											<input type="file" name="image" accept="image/*" onchange="loadFile(event)">
																											</span>
						
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
										
									<!--footer section end-->
								</div>
							</div>
							<form method="post">
							<button type ="submit" name="Back" value="send to database" style="width:100px; background-color:#191970; 
							margin-left:1432px; color:#E0FFFF; font-size:20px"><a href="gallery.php"> Back </button>
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





