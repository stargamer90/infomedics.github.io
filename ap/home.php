<html>
<head>
<title>Admin Panel || Home</title>
 <link rel="shortcut icon" href="logo.png">
</head>
<html>
<?php include("newheader.php");?>	
<?php require_once("connection.php");
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
											
												  <div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h2 class="modal-title"><img src="img1.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>for blind people.
													The term "blindness" is typically used to describe individuals with no usable vision or only the ability to perceive light.
												When meeting a blind person, wait for him to extend his hand for a handshake.
												Coworkers should identify themselves by name when speaking to individuals with visual impairments.			
												Speak with a normal tone of voice. Do not shout.
												When there are several people in a room, such as during a staff meeting, each individual should identify himself to the person who is blind.
												Indicate the end of a conversation before walking away.
								
															</div>
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div>
												    <div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
															
																<h2 class="modal-title"><img src="img2.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>for Children.
												Children in India continue to suffer due to issues like such as lack of healthcare
												malnutrition, poor hygiene, illiteracy and exploitation
												11.27 lakh children below 5 die in a year
												This is 3212 under 5 child deaths per day
												1 in every 8 children in India is works as a child laborer
												More than half (56%) of the under 5 deaths occur within the first 28 days of life
								
															</div>
															
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div>
												    <div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
															
																<h2 class="modal-title"><img src="img3.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>Children’s rights education (or children’s human rights education) is the teaching and practice of children’s
																rights in schools and educational institutions, as informed by and consistent with the United Nations Convention on the 
																Rights of the Child. When fully implemented, a children's rights education program consists of both a curriculum to teach children 
																their human rights, and framework to operate the school in a manner that respects children's rights. Articles 29 and 42 of the 
																Convention on the Rights of the Child require children to be educated about their rights.
																
															</div>
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div>
												   <div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
						
																<h2 class="modal-title"><img src="img4.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>Save the Children has changed the lives of more than 1 crore Indian children since 2008.
																It is one of India's biggest NGOs. Established in 1919, and present in more than 80 countries, 
																we are one of the most influential, organised, well- networked, resourceful and impactful NGOs.
																Save the Children works for providing equality, equal education, equal nutrition, equal health, 
																equal opportunities, gender equality, and life-saving humanitarian situations and relief during
																natural disasters to the most deprived children of India.


															</div>
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div>
												   <div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
														<h2 class="modal-title"><img src="img5.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>A decade ago, old age homes were meant only for the destitute and the poor.
																Typically charitable institutions ran these. These were dwellings, 
																which provided food. shelter and basic facilities for them to live and to be taken care of.
																While these old age homes did not suit the requirements and lifestyle of Middle and Upper Middle 
																Income Group senior citizens, it gave the inmates abundant love and affection that they missed in real life. 
																These old age homes may not have been designed to suit senior living or lacked the ambience and the class that we see today, 
																but these were run efficiently and care was never found wanting.
															</div>
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div>
												   <div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
					
																<h2 class="modal-title"><img src="img6.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>A decade ago, old age homes were meant only for the destitute and the poor.
																Typically charitable institutions ran these. These were dwellings, 
																which provided food. shelter and basic facilities for them to live and to be taken care of.
																While these old age homes did not suit the requirements and lifestyle of Middle and Upper Middle 
																Income Group senior citizens, it gave the inmates abundant love and affection that they missed in real life. 
																These old age homes may not have been designed to suit senior living or lacked the ambience and the class that we see today, 
																but these were run efficiently and care was never found wanting.
								
															</div>
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div>
												   <div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
															
																<h2 class="modal-title"><img src="img7.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>Disabilities is an umbrella term, covering impairments, activity limitations, and participation restrictions. 
																An impairment is a problem in body function or structure; an activity limitation is a difficulty encountered by 
																an individual in executing a task or action; while a participation restriction is a problem experienced by an individual in involvement in life situations. 
																Disability is thus not just a health problem. It is a complex phenomenon, reflecting the interaction between features of a person’s body and features of the society in which he or she lives.
								
															</div>
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div><div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
															
																<h2 class="modal-title"><img src="img8.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>for blind people.
													The term "blindness" is typically used to describe individuals with no usable vision or only the ability to perceive light.
												When meeting a blind person, wait for him to extend his hand for a handshake.
												Coworkers should identify themselves by name when speaking to individuals with visual impairments.			
												Speak with a normal tone of voice. Do not shout.
												When there are several people in a room, such as during a staff meeting, each individual should identify himself to the person who is blind.
												Indicate the end of a conversation before walking away.
								
															</div>
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div>
												   <div class="bs-example2">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
															 <h2 class="modal-title"><img src="img14.jpg" height="300" width="300"></h2>
															</div>
															<div class="modal-body">
																<p>Disabilities is an umbrella term, covering impairments, activity limitations, and participation restrictions. 
																An impairment is a problem in body function or structure; an activity limitation is a difficulty encountered by 
																an individual in executing a task or action; while a participation restriction is a problem experienced by an individual in involvement in life situations. 
																Disability is thus not just a health problem. It is a complex phenomenon, reflecting the interaction between features of a person’s body and features of the society in which he or she lives.
															</div>
															
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												   </div>
												 
																	<script type="text/javascript+protovis"></script>
																	<script type="text/javascript" src="js/protovis-d3.2.js"></script>
																	<script type="text/javascript" src="js/vix.js"></script>
																	<script src="js/fabochart.js"></script>
																	<script src="js/Chart.js"></script>
										
									</div>
									
<?php include("newfooter.php");?>