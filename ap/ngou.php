<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
require_once("../config/connection.php");
$id=0;
if(isset($_GET['id']))
{
$id = $_GET['id'];

$sql="SELECT * from ngo where ngo_id = '".$id."'";
$sql1="select *from area";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);


$row = mysqli_fetch_array($result);

}	
?>
<html>
<head>
<title>Admin Panel || NGO</title>
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
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
													   
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>

						<!-- //header-ends -->
							<!--//outer-wp-->
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<?php require_once("..\config\connection.php");
							
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["ngoname"]) && isset($_POST["area_id"]) && isset($_POST["ngoadd1"]) 
			&& isset($_POST["ngoadd2"]) && isset($_POST["email"]) && isset($_POST["psswd"]) && isset($_POST["regid"]) && isset($_POST["ngocont"]))
		{ 
			echo "value set";
			$ngoname=$_POST["ngoname"];
			$ngoadd1=$_POST["ngoadd1"];
			$ngoadd2=$_POST["ngoadd2"];
			$ngodes=$_POST["ngodes"];
			$regid=$_POST["regid"];
			$email=$_POST["email"];
			$ngocont=$_POST["ngocont"];
			$psswd=$_POST["psswd"];
			$area_id = $_POST["area_id"];
			
		if($ngoname!='' && $ngodes!='' && $area_id!=''&& $ngoadd1!='' && $ngoadd2!='' && $email!='' && $psswd!='' && $regid!='' && $ngocont)
			{
				echo "value not null";
				$sql4 ="update ngo set ngo_name='".$ngoname."',ngo_description='".$ngodes."',area_id='".$area_id."',
				ngo_address1='".$ngoadd1."',ngo_address2='".$ngoadd2."',ngo_emailid='".$email."',ngo_password='".$psswd."',
				registration_id='".$regid."',ngo_contact='".$ngocont."'
				where ngo_id = '".$id."' ";
			
				$result=mysqli_query($conn,$sql4);
				

				echo $result;
				
				if($result)	
				{	
					header("Location:ngo.php");
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
																					<h3 class="inner-tittle two">Update NGO Form </h3>
																						<div class="grid-1">
																						   <form class="form-horizontal">
																									<div class="form-group">
																										<label class="col-md-2 control-label">NGO Name</label>
																										<div class="col-md-8">
																											<div class="input-group">							
																												<span class="input-group-addon">
																													<i class="fa fa-users"></i>
																												</span>
																												<input type="text" name="ngoname" class="form-control1 icon" value=<?php echo $row['ngo_name']?> >
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
																												<input type="text" name="regid" class="form-control1 icon" value=<?php echo $row['registration_id']?> >
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
																												<input type="password" name="psswd" class="form-control1 icon" value=<?php echo $row['ngo_password']?> >
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
																												<input type="text" name="ngoadd1" class="form-control1 icon" value=<?php echo $row['ngo_address1']?> >
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
																												<input type="text" name="ngoadd2" class="form-control1 icon" value=<?php echo $row['ngo_address2']?> >
																											</div>
																										</div>
																									</div>
																									<br><br>
																									<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">NGO Area</label>
																											<div class="col-sm-8"><select name="area_id" id="area_id" class="form-control1">
																												<?php 
																										$records = mysqli_query($conn,"SELECT * FROM area ");
																										while ($row1 = mysqli_fetch_array($records))
																										{
																												?>
																										<option value="<?php echo $row1['area_id']?>"><?php echo $row1['area_name'];?></option>
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
																													<i class="fa fa-map-edit"></i>
																												</span>
																												<input type="text" name="ngodes" class="form-control1 icon" value=<?php echo $row['ngo_description']?> >
																											</div>
																										</div>
																									</div>
																									<br><br>
																									
																									<div class="form-group">
																										<label class="col-md-2 control-label">Email</label>
																										<div class="col-md-8">
																											<div class="input-group input-icon right">
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input id="email" name="email" class="form-control1 icon" type="email" value=<?php echo $row['ngo_emailid']?> >
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
																												<input type="tel" name="ngocont" class="form-control1 icon" value=<?php echo $row['ngo_contact']?> >
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





