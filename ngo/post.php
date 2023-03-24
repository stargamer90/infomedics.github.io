
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
<title>NGO || Post</title>
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
											
												<form method="post">
										        </div>
												<h3 class="inner-tittle two">Post Data</h3>
												
													<div class="graph">
														<div class="tables">
																<table class="table table-hovered"> 
																<thead> 
																<th></th>
																<th>Post Amount</th> 	
																<th>Donor Name</th> 	
																<th>Starting Date</th>
																<th>Ending Date</th>
																<th>Action</th>
																</tr> </thead> 
																<tbody> 
																<?php


	 $sql="Select p.post_id,p.post_amount,p.post_start ,p.post_end ,d.donor_firstname 
	  
	 from post p,donor d
	 where p.donor_id=d.donor_id ";
	
	$result=mysqli_query($conn,$sql);
	if(!$result)
	{
		printf("Error\:%s\n",mysqli_error($conn));
		exit();
	}
		
	 while($row = mysqli_fetch_array($result))
	 {
		 echo "<tr>";
		 echo "<td><input name='chkbox[]' type='checkbox' value=$row[post_id]></td>";
		  echo "<td>" . $row['post_amount'] . "</td>";
		   echo "<td>" . $row['donor_firstname'] . "</td>";
		  echo "<td>" . $row['post_start'] . "</td>";
		  echo "<td>" . $row['post_end'] . "</td>";
		  
		    
		 echo "<td>
			<a href=\"postu.php?id=$row[post_id]\">
			<img src=\"edit.jpg\" height='25'/></a></td>";
		 echo "</tr>";
	 }
?>
																</tbody>
																</table>
																<?php
if(isset($_POST['delete']))
{
	$cnt=array();
	$cnt=count($_POST['chkbox']);
	for($i=0;$i<$cnt;$i++)
	{
		$del_id=$_POST['chkbox'][$i];
		$query="delete from post where post_id=".$del_id;
		mysqli_query($conn,$query);
		echo "		<script>
						alert('Record Deleted !');
						window.location='../ngo/post.php';
					</script>";
	}
}



?>
																<input type="submit" name="delete" value="Delete">
																</form>

															</div>
												
													</div>
													
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
									
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