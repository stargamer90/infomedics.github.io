<?php include("newheader.php");	
 require_once("../config/connection.php");
$query="select donor_id from donor";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
?>
	<div class="outter-wp">
								<!--custom-widgets-->
												
												<!--//custom-widgets-->
												<!--/candile-->
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

   
															
																	
															   
																<script type="text/javascript+protovis">
																</script>
																	<script type="text/javascript" src="js/protovis-d3.2.js"></script>
																	<script type="text/javascript" src="js/vix.js"></script>

													
																				
														
															
														</div>
														<section class="slider-section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
                <div class="item active">
                   <div class="slider-overlay"></div>
                    <img src="images/slide-one-01.jpg" alt="Slider One Image">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 slider-content">
                                <div class="slider-content-inner">
                                    <h2>Welcome To Welfare Foundation</h2>
                                    <h1 class="delay1">Best For Charity</h1>
                                    <p class="delay3">Continually redefine team building products rather than theme parallel world a class growth strategies for awesoem.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                   <div class="slider-overlay"></div>
                    <img src="images/slide-one-02.jpg" alt="Slider One Image">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 slider-content">
                                <div class="slider-content-inner">
                                    <h2>Give A Helping Hand</h2>
                                    <h1 class="delay1">For Education</h1>
                                    <p class="delay3">Continually redefine team building products rather than theme parallel world a class growth strategies for awesoem.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                   <div class="slider-overlay"></div>
                    <img src="images/slide-one-03.jpg" alt="Slider One Image">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 slider-content">
                                <div class="slider-content-inner">
                                    <h2>Donate & Help</h2>
                                    <h1 class="delay1">for Needy People</h1>
                                    <p class="delay3">Continually redefine team building products rather than theme parallel world a class growth strategies for awesoem.</p>
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
      </div>
      </div>
    </section>
    
													<!--/candile-->
																									
												<!--/charts-->
												<div class="charts">
												 
														
														
														
															<script src="js/fabochart.js"></script>
															<script>
															</script>
															<!--/float-charts-->
															<script>
																</script>
															<script>
															  </script>
													        	</script>
																<script src="js/Chart.js"></script>
															<script>
														</script>
																
													<!--//weather-charts-->
														
															<script>
																			 
																		</script>
																			
															<script>
																		</script>
																
														<script>
																</script>
															<script>
																</script>
														<script>
															</script>
															
													<!--//charts-->
										<!--/bottom-grids-->		 
											<!--//bottom-grids-->
									<!--/charts-inner-->
								
										<!--//outer-wp-->
									</div>
<?php include("sidebar.php");?>