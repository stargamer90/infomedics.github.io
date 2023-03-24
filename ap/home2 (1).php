     
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php require_once("../config/connection.php");
$query="select donor_id from donor";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
?>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
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
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>

   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<?php include("header.php");?>
					<!-- //header-ends -->
						<div class="outter-wp">
								<!--custom-widgets-->
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
												<br><br><br><br><br>
												<div>
												<table>
												<tr>
												<td>
												<img src="img1.jpg" height="300" width="300">
												</td>
												<td>
												</td>
												<td>
												&nbsp;&nbsp;&nbsp;&nbsp;for blind people.
												&nbsp;&nbsp;&nbsp;&nbsp;The term "blindness" is typically used to describe individuals with no usable vision or only the ability to perceive light.
												&nbsp;&nbsp;&nbsp;&nbsp;When meeting a blind person, wait for him to extend his hand for a handshake.
												&nbsp;&nbsp;&nbsp;&nbsp;Coworkers should identify themselves by name when speaking to individuals with visual impairments.			
												&nbsp;&nbsp;&nbsp;&nbsp;Speak with a normal tone of voice. Do not shout.
												&nbsp;&nbsp;&nbsp;&nbsp;When there are several people in a room, such as during a staff meeting, each individual should identify himself to the person who is blind.
												&nbsp;&nbsp;&nbsp;&nbsp;Indicate the end of a conversation before walking away.
												&nbsp;&nbsp;&nbsp;&nbsp;Feel free to use vision-oriented words such as "see," "look," and " watch."
												&nbsp;&nbsp;&nbsp;&nbsp;Be specific when giving directions or descriptions. Saying, "the copy machine is located outside the break room to the left of the door," is more helpful than saying, "it's over there." Similarly, avoid using hand gestures to communicate messages.
												&nbsp;&nbsp;&nbsp;&nbsp;Don't assume a blind person always needs assistance and can't do things for himself.
												&nbsp;&nbsp;&nbsp;&nbsp;If an individual with vision loss needs assistance walking to a destination, a sighted coworker can offer her arm as a sighted guide. The guide shouldn't grab the person's arm and try to steer him in a certain direction.

												</td>
												
												</tr>
												
												<tr>
												<td>
												for Children.&nbsp;&nbsp;&nbsp;&nbsp;
												Children in India continue to suffer due to issues like such as lack of healthcare,&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
												malnutrition, poor hygiene, illiteracy and exploitation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												11.27 lakh children below 5 die in a year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												This is 3212 under 5 child deaths per day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												1 in every 8 children in India is works as a child laborer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												More than half (56%) of the under 5 deaths occur within the first 28 days of life,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												we work to prevent these lives&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												Almost 1 in 3 women in India are married before the age of 18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												8.4 crores children in India don’t go to school&nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp;
												20% of grade 2 children in India cannot recognize numbers 1-9; 53% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												of children drop out of school at elementary level&nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;&nbsp;&nbsp;
												49.5% of grade 5 children cannot do subtraction; 51.09% of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												grade 5 children cannot read grade 2 English and 25.4% children of grade 8 cannot read grade 2 text&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												Children are perhaps the most "voiceless" segment of the population &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												and it is up to us to recognize their issues and work together to address them&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</td>
												<td>
												</td>
												<td>
												<img src="img2.jpg" height="300" width="300">
												</td>
												</tr>
												<tr>
												<td>
												<img src="img3.jpg" height="300" width="300">
												</td>
												<td>
												</td>
												<td>
												&nbsp;&nbsp;&nbsp;&nbsp;for blind people
												</td>
												</tr>
												<tr>
												<td>
												&nbsp;&nbsp;&nbsp;&nbsp;for blind people
												</td>
												<td>
												</td>
												<td>
												<img src="img4.jpg" height="300" width="300">
												</td>
												</tr>
												<tr>
												<td>
												<img src="img5.jpg" height="300" width="300">
												</td>
												<td>
												</td>
												<td>
												&nbsp;&nbsp;&nbsp;&nbsp;for blind people
												</td>
												</tr>
												<tr>
												<td>
												&nbsp;&nbsp;&nbsp;&nbsp;for blind people
												</td>
												<td>
												</td>
												<td>
												<img src="img6.jpg" height="300" width="300">
												</td>
												</tr>
												<tr>
												<td>
												<img src="img7.jpg" height="300" width="300">
												</td>
												<td>
												</td>
												<td>
												&nbsp;&nbsp;&nbsp;&nbsp;for blind people
												</td>
												</tr>
												
												</table>
												</div>
			<h3 class="inner-tittle two">My Office </h3>
			<div class="main-grid3 map">
	
																			  <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Purwokerto,+Central+Java,+Indonesia&amp;aq=0&amp;oq=purwo&amp;sll=37.0625,-95.677068&amp;sspn=50.291089,104.238281&amp;ie=UTF8&amp;hq=&amp;hnear=Purwokerto,+Banyumas,+Central+Java,+Indonesia&amp;ll=-7.431391,109.24783&amp;spn=0.031022,0.050898&amp;t=m&amp;z=14&amp;output=embed"></iframe>
																							<div class="gmap-info">
																									<h4> <i class="fa fa-map-marker"></i> <b><a href="#" class="text-dark">Welfare Foundation</a></b></h4>
																									<p>No. 3,Honey Infinity - Tower, </p>
																									 <p>E 3rd, 4th, and 5th Floors</p>
																									<p>Ahmedabad, India</p>
																								</div>
																	
																	</div>
            
												<!--//custom-widgets-->
												<!--/candile-->
													<div class="candile"> 
															<div id="fig">
																<script type="text/javascript+protovis">


																</script>
																	<script type="text/javascript" src="js/protovis-d3.2.js"></script>
																	<script type="text/javascript" src="js/vix.js"></script>

															</div>
														
															
														</div>
													<!--/candile-->
													
												<!--/charts-->

															<script src="js/fabochart.js"></script>
															<script>
															$(document).ready(function () {
																data = {
																  '2010' : 300, 
																  '2011' : 200,
																  '2012' : 100,
																  '2013' : 500,
																  '2014' : 400,
																  '2015' : 200
																};

																$("#chart1").faBoChart({
																  time: 500,
																  animate: true,
																  instantAnimate: true,
																  straight: false,
																  data: data,
																  labelTextColor : "#002561",
																});
																$("#chart2").faBoChart({
																  time: 2500,
																  animate: true,
																  data: data,
																  straight: true,
																  labelTextColor : "#002561",
																});
															});
															</script>
														</div>
															
																			<script>
																			   var chart = AmCharts.makeChart( "chartdiv", {
																					  "type": "serial",
																					  "theme": "light",
																					  "dataProvider": [ {
																						"year": 2005,
																						"value": 11.5,
																						"error": 5
																					  }, {
																						"year": 2006,
																						"value": 26.2,
																						"error": 5
																					  }, {
																						"year": 2007,
																						"value": 30.1,
																						"error": 5
																					  }, {
																						"year": 2008,
																						"value": 29.5,
																						"error": 7
																					  }, {
																						"year": 2009,
																						"value": 24.6,
																						"error": 10
																					  } ],
																					  "balloon": {
																						"textAlign": "left"
																					  },
																					  "valueAxes": [ {
																						"id": "v1",
																						"axisAlpha": 0
																					  } ],
																					  "startDuration": 1,
																					  "graphs": [ {
																						"balloonText": "value:<b>[[value]]</b><br>error:<b>[[error]]</b>",
																						"bullet": "yError",
																						"bulletSize": 10,
																						"errorField": "error",
																						"lineThickness": 2,
																						"valueField": "value",
																						"bulletAxis": "v1",
																						"fillAlphas": 0
																					  }, {
																						"bullet": "round",
																						"bulletBorderAlpha": 1,
																						"bulletBorderColor": "#FFFFFF",
																						"lineAlpha": 0,
																						"lineThickness": 2,
																						"showBalloon": false,
																						"valueField": "value"

																					  } ],
																					  "chartCursor": {
																						"cursorAlpha": 0,
																						"cursorPosition": "mouse",
																						"graphBulletSize": 1,
																						"zoomable": false
																					  },
																					  "categoryField": "year",
																					  "categoryAxis": {
																						"gridPosition": "start",
																						"axisAlpha": 0
																					  },
																					  "export": {
																						"enabled": true
																					  }
																					} );
																			</script>
															
																	
																</div>
																<div class="clearfix"> </div>
															</div>										
												<!--/float-charts-->
													
														<script>
															var chart = AmCharts.makeChart("chartdiv2", {
																	"type": "serial",
																	"theme": "patterns",
																	"legend": {
																		"useGraphSettings": true
																	},
																	"dataProvider": [{
																		"year": 1930,
																		"italy": 1,
																		"germany": 5,
																		"uk": 3
																	}, {
																		"year": 1934,
																		"italy": 1,
																		"germany": 2,
																		"uk": 6
																	}, {
																		"year": 1938,
																		"italy": 2,
																		"germany": 3,
																		"uk": 1
																	}, {
																		"year": 1950,
																		"italy": 3,
																		"germany": 4,
																		"uk": 1
																	}, {
																		"year": 1954,
																		"italy": 5,
																		"germany": 1,
																		"uk": 2
																	}, {
																		"year": 1958,
																		"italy": 3,
																		"germany": 2,
																		"uk": 1
																	}, {
																		"year": 1962,
																		"italy": 1,
																		"germany": 2,
																		"uk": 3
																	}, {
																		"year": 1966,
																		"italy": 2,
																		"germany": 1,
																		"uk": 5
																	}, {
																		"year": 1970,
																		"italy": 3,
																		"germany": 5,
																		"uk": 2
																	}, {
																		"year": 1974,
																		"italy": 4,
																		"germany": 3,
																		"uk": 6
																	}, {
																		"year": 1978,
																		"italy": 1,
																		"germany": 2,
																		"uk": 4
																	}],
																	"valueAxes": [{
																		"integersOnly": true,
																		"maximum": 6,
																		"minimum": 1,
																		"reversed": true,
																		"axisAlpha": 0,
																		"dashLength": 5,
																		"gridCount": 10,
																		"position": "left",
																		"title": "Place taken"
																	}],
																	"startDuration": 0.5,
																	"graphs": [{
																		"balloonText": "place taken by Italy in [[category]]: [[value]]",
																		"bullet": "round",
																		"hidden": true,
																		"title": "Italy",
																		"valueField": "italy",
																		"fillAlphas": 0
																	}, {
																		"balloonText": "place taken by Germany in [[category]]: [[value]]",
																		"bullet": "round",
																		"title": "Germany",
																		"valueField": "germany",
																		"fillAlphas": 0
																	}, {
																		"balloonText": "place taken by UK in [[category]]: [[value]]",
																		"bullet": "round",
																		"title": "United Kingdom",
																		"valueField": "uk",
																		"fillAlphas": 0
																	}],
																	"chartCursor": {
																		"cursorAlpha": 0,
																		"zoomable": false
																	},
																	"categoryField": "year",
																	"categoryAxis": {
																		"gridPosition": "start",
																		"axisAlpha": 0,
																		"fillAlpha": 0.05,
																		"fillColor": "#000000",
																		"gridAlpha": 0,
																		"position": "top"
																	},
																	"export": {
																		"enabled": true,
																		"position": "bottom-right"
																	 }
																});
																</script>
				
														      <script>
															    var chart = AmCharts.makeChart( "chartdiv4", {
																	  "type": "radar",
																	  "theme": "light",
																	  "dataProvider": [ {
																		"direction": "N",
																		"value": 8
																	  }, {
																		"direction": "NE",
																		"value": 9
																	  }, {
																		"direction": "E",
																		"value": 4.5
																	  }, {
																		"direction": "SE",
																		"value": 3.5
																	  }, {
																		"direction": "S",
																		"value": 9.2
																	  }, {
																		"direction": "SW",
																		"value": 8.4
																	  }, {
																		"direction": "W",
																		"value": 11.1
																	  }, {
																		"direction": "NW",
																		"value": 10
																	  } ],
																	  "valueAxes": [ {
																		"gridType": "circles",
																		"minimum": 0,
																		"autoGridCount": false,
																		"axisAlpha": 0.2,
																		"fillAlpha": 0.05,
																		"fillColor": "#FFFFFF",
																		"gridAlpha": 0.08,
																		"guides": [ {
																		  "angle": 225,
																		  "fillAlpha": 0.7,
																		  "fillColor": "#052963",
																		  "tickLength": 0,
																		  "toAngle": 315,
																		  "toValue": 14,
																		  "value": 0,
																		  "lineAlpha": 0,

																		}, {
																		  "angle": 45,
																		  "fillAlpha": 0.6,
																		  "fillColor": "#ea4c89",
																		  "tickLength": 0,
																		  "toAngle": 135,
																		  "toValue": 14,
																		  "value": 0,
																		  "lineAlpha": 0,
																		} ],
																		"position": "left"
																	  } ],
																	  "startDuration": 1,
																	  "graphs": [ {
																		"balloonText": "[[category]]: [[value]] m/s",
																		"bullet": "round",
																		"fillAlphas": 0.3,
																		"valueField": "value"
																	  } ],
																	  "categoryField": "direction",
																	  "export": {
																		"enabled": true
																	  }
																	} );
															  </script>
													        
														
																<script>
																var randomScalingFactor = function() {
																	return Math.round(Math.random() * 100 * (Math.random() > 0.5 ? -1 : 1));
																};
																var randomColor = function(opacity) {
																	return 'rgba(' + Math.round(Math.random() * 255) + ',' + Math.round(Math.random() * 255) + ',' + Math.round(Math.random() * 255) + ',' + (opacity || '.3') + ')';
																};

																var lineChartData = {
																	labels: ["January", "February", "March", "April", "May", "June", "July"],
																	datasets: [{
																		label: "My First dataset",
																		data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
																		yAxisID: "y-axis-1",
																	}, {
																		label: "My Second dataset",
																		data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
																		yAxisID: "y-axis-2"
																	}]
																};

																$.each(lineChartData.datasets, function(i, dataset) {
																	dataset.borderColor = randomColor(0.4);
																	dataset.backgroundColor = randomColor(1);
																	dataset.pointBorderColor = randomColor(0.7);
																	dataset.pointBackgroundColor = randomColor(0.5);
																	dataset.pointBorderWidth = 1;
																});

																console.log(lineChartData);

																window.onload = function() {
																	var ctx = document.getElementById("canvas").getContext("2d");
																	window.myLine = Chart.Line(ctx, {
																		data: lineChartData,
																		options: {
																			
																			hoverMode: 'label',
																			stacked: false,
																			scales: {
																				xAxes: [{
																					display: true,
																					gridLines: {
																						offsetGridLines: false
																					}
																				}],
																				yAxes: [{
																					type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
																					display: true,
																					position: "left",
																					id: "y-axis-1",
																				}, {
																					type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
																					display: true,
																					position: "right",
																					id: "y-axis-2",

																					// grid line settings
																					gridLines: {
																						drawOnChartArea: false, // only want the grid lines for one axis to show up
																					},
																				}],
																			}
																		}
																	});
																};

																$('#randomizeData').click(function() {
																	lineChartData.datasets[0].data = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()];

																	lineChartData.datasets[1].data = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()];

																	window.myLine.update();
																});
																</script>
																<script src="js/Chart.js"></script>
															
																
																<script>
																var chart = AmCharts.makeChart("chartdiv1", {
																				  "type": "serial",
																				  "theme": "light",
																				  "rotate": true,
																				  "marginBottom": 50,
																				  "dataProvider": [{
																					"age": "85+",
																					"male": -0.1,
																					"female": 0.3
																				  }, {
																					"age": "80-54",
																					"male": -0.2,
																					"female": 0.3
																				  }, {
																					"age": "75-79",
																					"male": -0.3,
																					"female": 0.6
																				  }, {
																					"age": "70-74",
																					"male": -0.5,
																					"female": 0.8
																				  }, {
																					"age": "65-69",
																					"male": -0.8,
																					"female": 1.0
																				  }, {
																					"age": "60-64",
																					"male": -1.1,
																					"female": 1.3
																				  }, {
																					"age": "55-59",
																					"male": -1.7,
																					"female": 1.9
																				  }, {
																					"age": "50-54",
																					"male": -2.2,
																					"female": 2.5
																				  }, {
																					"age": "45-49",
																					"male": -2.8,
																					"female": 3.0
																				  }, {
																					"age": "40-44",
																					"male": -3.4,
																					"female": 3.6
																				  }, {
																					"age": "35-39",
																					"male": -4.2,
																					"female": 4.1
																				  }, {
																					"age": "30-34",
																					"male": -5.2,
																					"female": 4.8
																				  }, {
																					"age": "25-29",
																					"male": -5.6,
																					"female": 5.1
																				  }, {
																					"age": "20-24",
																					"male": -5.1,
																					"female": 5.1
																				  }, {
																					"age": "15-19",
																					"male": -3.8,
																					"female": 3.8
																				  }, {
																					"age": "10-14",
																					"male": -3.2,
																					"female": 3.4
																				  }, {
																					"age": "5-9",
																					"male": -4.4,
																					"female": 4.1
																				  }, {
																					"age": "0-4",
																					"male": -5.0,
																					"female": 4.8
																				  }],
																				  "startDuration": 1,
																				  "graphs": [{
																					"fillAlphas": 0.8,
																					"lineAlpha": 0.2,
																					"type": "column",
																					"valueField": "male",
																					"title": "Male",
																					"labelText": "[[value]]",
																					"clustered": false,
																					"labelFunction": function(item) {
																					  return Math.abs(item.values.value);
																					},
																					"balloonFunction": function(item) {
																					  return item.category + ": " + Math.abs(item.values.value) + "%";
																					}
																				  }, {
																					"fillAlphas": 0.8,
																					"lineAlpha": 0.2,
																					"type": "column",
																					"valueField": "female",
																					"title": "Female",
																					"labelText": "[[value]]",
																					"clustered": false,
																					"labelFunction": function(item) {
																					  return Math.abs(item.values.value);
																					},
																					"balloonFunction": function(item) {
																					  return item.category + ": " + Math.abs(item.values.value) + "%";
																					}
																				  }],
																				  "categoryField": "age",
																				  "categoryAxis": {
																					"gridPosition": "start",
																					"gridAlpha": 0.2,
																					"axisAlpha": 0
																				  },
																				  "valueAxes": [{
																					"gridAlpha": 0,
																					"ignoreAxisWidth": true,
																					"labelFunction": function(value) {
																					  return Math.abs(value) + '%';
																					},
																					"guides": [{
																					  "value": 0,
																					  "lineAlpha": 0.2
																					}]
																				  }],
																				  "balloon": {
																					"fixedPosition": true
																				  },
																				  "chartCursor": {
																					"valueBalloonsEnabled": false,
																					"cursorAlpha": 0.05,
																					"fullWidth": true
																				  },
																				  "allLabels": [{
																					"text": "Male",
																					"x": "28%",
																					"y": "97%",
																					"bold": true,
																					"align": "middle"
																				  }, {
																					"text": "Female",
																					"x": "75%",
																					"y": "97%",
																					"bold": true,
																					"align": "middle"
																				  }],
																				 "export": {
																					"enabled": true
																				  }   

																				});
																		</script>
																</div>
																
																<script>
																			 var icons = new Skycons({"color": "#002561"}),
																				  list  = [
																					"clear-night", "partly-cloudy-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
																				
																	<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "cloudy",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
																<			
																	<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
															
																<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
														
																
																<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
															

												<!--//charts-->
												
									
									<!--//bottom-grids-->
									
									</div>
									<!--/charts-inner-->
									</div>
										<!--//outer-wp-->
									</div>
									
								</div>
							</div>
							
							
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<?php include("sidebar.php");?>
							  <div class="clearfix"></div>		
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
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>