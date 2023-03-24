<!DOCTYPE html>
<?php require_once("../config/connection.php");?>
<html lang="en">

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:00 GMT -->
<head>
<style>

</style>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welfare Foundation || Up Coming Event</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================= Favicon ================== -->
    <link rel="shortcut icon" href="logo.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CRoboto+Condensed:300,400,700%7CRoboto:300,400,500,700,900%7CRubik:300,400,500,700,900%7CCabin:400,500,600,700" rel="stylesheet">
    <!-- Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Ion Icon-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Bootsrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Round Slider -->
    <link rel="stylesheet" href="css/roundslider.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mega Menu -->
    <link rel="stylesheet" href="css/menuzord.css">
    <!--SLick -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.min.css">

    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr-->
    <script src="js/modernizr-2.8.3.min.js"></script>
</head>
<body>

    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- == Top bar  ==-->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
            </div>
        </div>
    </div>
    <header>
<?php
include("header.php");?>
    </header>
    <!-- == Banner== -->
    <div class="banner-area pdt100 pdb100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Events</h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>|</li>
                            <li><a href="#" class="active">Events</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Banner -->

    <!-- == Upcomming Event == -->
    <div class="upcoming-event-body mt100 mb50">
        <div class="container">
            <div class="row">
			<?php
							$sql="select * from events ";
							
							$result= mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
							{
						?>
                <div class="col-sm-6">
                    <div class="upcoming-event-item">
                        <div class="image" >
                            <img src="images/<?php echo $row['image'];?>"  style="width: 100%;
								height:200px" class="img-responsive" alt="event image">
                            <a class="green-button button-hover-one" href="event-detail.php?id=<?php echo $row['event_id']?>">Read more</a>
                        </div>
                        <div class="event-detail">
						
                            <div class="date green">
                              <h6> <i class="fa fa-calendar-o"></i>&nbsp;&nbsp;<?php
									echo $row['createddate'];
									?></h6>
                            </div>
                            <div class="heading">
                                <div class="time-address green">
                                    <span><i class="fa fa-spinner"></i> <?php echo $row['event_name'];?></span>
                                    <span><i class="ion-ios-location-outline"></i><?php
									echo $row['venue'];
									?></span>
                                </div>
                                <h3><i class="glyphicon glyphicon-chevron-right"></i> <?php
									echo $row['event_description'];
									?></h3>
                            </div><br><br>
                        </div>
                    </div><!--/.upcoming-event-item-->
                </div><?php 
							}
							?>
                 <!--   <div class="col-sm-6">
                     <!--  <div class="upcoming-event-item">
                        <div class="image">
                            <img src="images/event/5.jpg" class="img-responsive" alt="event image">
                            <a class="green-button button-hover-one" href="event-detail.html">Read more</a>
                        </div>
                        <div class="event-detail">
                            <div class="date green">
                                <span>13</span>
                                DECEMBER
                            </div>
                            <div class="heading">
                                <div class="time-address green">
                                    <span><i class="ion-clock"></i>08:00 - 16:00</span>
                                    <span><i class="ion-ios-location-outline"></i>VALLEJO, CALIFORNIA</span>
                                </div>
                                <h3><a href="#">Big charity: build school for poor children</a></h3>
                            </div>
                        </div>
                    </div><!--/.upcoming-event-item
                </div>
   <!-- <div class="col-sm-6">
                       <!--<div class="upcoming-event-item">
                        <div class="image">
                            <img src="images/event/6.jpg" class="img-responsive" alt="event image">
                            <a class="green-button button-hover-one" href="event-detail.html">Read more</a>
                        </div>
                        <div class="event-detail">
                            <div class="date green">
                                <span>26</span>
                                DECEMBER
                            </div>
                            <div class="heading">
                                <div class="time-address green">
                                    <span><i class="ion-clock"></i>08:00 - 16:00</span>
                                    <span><i class="ion-ios-location-outline"></i>VALLEJO, CALIFORNIA</span>
                                </div>
                                <h3><a href="#">Donate $45 now to feed a Syrian Children</a></h3>
                            </div>
                        </div>
                    </div><!--/.upcoming-event-item-->
                </div>
                   <!-- <div class="col-sm-6">
                      <div class="upcoming-event-item">
                        <div class="image">
                            <img src="images/event/7.jpg" class="img-responsive" alt="event image">
                            <a class="green-button button-hover-one" href="event-detail.html">Read more</a>
                        </div>
                        <div class="event-detail">
                            <div class="date green">
                                <span>22</span>
                                DECEMBER
                            </div>
                            <div class="heading">
                                <div class="time-address green">
                                    <span><i class="ion-clock"></i>08:00 - 16:00</span>
                                    <span><i class="ion-ios-location-outline"></i>VALLEJO, CALIFORNIA</span>
                                </div>
                                <h3><a href="#">Building clean-water system for rural poor</a></h3>
                            </div>
                        </div>
                    </div><!--/.upcoming-event-item
                </div>
                 <!--   <div class="col-sm-6">
                       <!--<div class="upcoming-event-item">
                        <div class="image">
                            <img src="images/event/8.jpg" class="img-responsive" alt="event image">
                            <a class="green-button button-hover-one" href="event-detail.html">Read more</a>
                        </div>
                        <div class="event-detail">
                            <div class="date green">
                                <span>24</span>
                                DECEMBER
                            </div>
                            <div class="heading">
                                <div class="time-address green">
                                    <span><i class="ion-clock"></i>08:00 - 16:00</span>
                                    <span><i class="ion-ios-location-outline"></i>VALLEJO, CALIFORNIA</span>
                                </div>
                                <h3><a href="#">where no child goes to bed hungry</a></h3>
                            </div>
                        </div>
                    </div><!--/.upcoming-event-item-->
                </div>
                   <!-- <div class="col-sm-6">
                      <!-- <div class="upcoming-event-item">
                        <div class="image">
                            <img src="images/event/9.jpg" class="img-responsive" alt="event image">
                            <a class="green-button button-hover-one" href="event-detail.html">Read more</a>
                        </div>
                        <div class="event-detail">
                            <div class="date green">
                                <span>21</span>
                                DECEMBER
                            </div>
                            <div class="heading">
                                <div class="time-address green">
                                    <span><i class="ion-clock"></i>08:00 - 16:00</span>
                                    <span><i class="ion-ios-location-outline"></i>VALLEJO, CALIFORNIA</span>
                                </div>
                                <h3><a href="#">Raise fund cause cancer patient's light for life</a></h3>
                            </div>
                        </div>
                    </div><!--/.upcoming-event-item-->
                </div>
            </div>
        </div>
    </div>
    <!-- // Testimonial  -->
    <!-- == Get strated == -->
    <div class="get-started">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left">
                        <div class="content">
                            <h2>Ready To Give Feedback?</h2>
                            <p>We all need people who will give us feedback.That's how we improve. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right text-right">
                        <a href="feedback.php" class="white-button">Give Feedback  <i class='ion-ios-arrow-thin-right'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Get strated  -->
    <!-- == Footer == -->
    <footer>
<?php
include("footer.php");
?>
    </footer>
    <!-- // End Footer  -->
	<!-- == jQuery Librery == -->
    <script src="js/jquery-2.2.4.min.js"></script>
	<!-- == Bootsrap js File == -->
    <script src="js/bootstrap.min.js"></script>
	<!-- == Isotope == -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- == Isotope == -->
    <script src="js/menuzord.js"></script>
	<!-- == Progress Bar == -->
    <script src="js/jquery.barfiller.js"></script>
	<!-- == Scroll it == -->
    <script src="js/scrollIt.min.js"></script>
    <!-- == magnific-popup == -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- == Round slider == -->
    <script src="js/roundslider.js"></script>

	<!-- == OWl carousel == -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- == jquery mb YTPlayer == -->
   <script src="js/jquery.mb.YTPlayer.js"></script>
	<!-- == Slick carousel == -->
    <script src="js/slick.js"></script>
	<!-- == Zingchart == -->
    <script src="js/zingchart.min.js"></script>
	<!-- == Prallex == -->
    <script src="js/prallex.js"></script>
	<!-- == custom Js File == -->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:47 GMT -->
</html>
