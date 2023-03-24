<html>
<head>
<title>Admin Panel || Home</title>
 <link rel="shortcut icon" href="logo.png">
</head>
<html>
<?php include("newheader.php");?>	
<?php require_once("../config/connection.php");
$query="select donor_id from donor";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
?>

	<div class="outter-wp">
							
												<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="stats-left ">
																<h5>Registered</h5>
																<h4> Donor</h4>
															</div>
															<div class="stats-right">
																<label><?php echo $count;?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
															<?php
															$count=0;
							$query1="SELECT COUNT(feedback_id)as feedback From feedback";
							$result1=mysqli_query($conn,$query1);
							$row1=mysqli_fetch_assoc($result1);
							$count1=$row1['feedback'];
															?>
																<h5>Total</h5>
																<h4>Feedback</h4>
															</div>
															<div class="stats-right">
																<label> <?php echo $count1 ;?></label>
															</div>
															
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
															<?php
																$count2 = 0;
						$query2 = "SELECT COUNT(event_id)as event_name FROM events WHERE  createddate = CURRENT_DATE";
						$result2 = mysqli_query($conn,$query2);
						$row2 = mysqli_fetch_assoc($result2);
						$count2 = $row2['event_name'];
							?>
																<h5>Today's</h5>
																<h4>Events</h4>
															</div>
															<div class="stats-right">
																<label><?php echo $count2 ; ?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-last">
															<div class="stats-left">
															<?php
																$query3="SELECT COUNT(ngo_id)as ngo_id From ngo";
							$result3=mysqli_query($conn,$query3);
							$row3=mysqli_fetch_assoc($result3);
							$count3=$row3['ngo_id'];
							?>
																<h5>Total</h5>
																<h4>NGO</h4>
															</div>
															<div class="stats-right">
																<label><?php echo $count3 ; ?></label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<div class="typo-grid">
 	  
											  	 <h3 class="head-top">Home</h3>
											  <div class="grid_3 grid_5">
											
												 
																	<script type="text/javascript+protovis"></script>
																	<script type="text/javascript" src="js/protovis-d3.2.js"></script>
																	<script type="text/javascript" src="js/vix.js"></script>
																	<script src="js/fabochart.js"></script>
																	<script src="js/Chart.js"></script>
										
									</div>
									
<?php include("newfooter.php");?>