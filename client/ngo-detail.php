\<!DOCTYPE html>
<?php
require_once("../config/connection.php");
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql="SELECT  e.event_id , e.event_name,e.event_description,e.venue,e.image,e.createddate
	,n.ngo_name ,a.area_name from events e join area a join ngo n  where  e.area_id = a.area_id and e.ngo_id=n.ngo_id and event_id = '".$id."' ";
$result=mysqli_query($conn,$sql);
$row1 = mysqli_fetch_array($result);
}	
?>
<html lang="en">

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charity || Event Detail</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================= Favicon ================== -->
    <link rel="shortcut icon" href="images/favicon.png">
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
	include("header.php");
	?>
    </header>
    <!-- == Banner== -->
    <div class="banner-area pdt100 pdb100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Event Detail</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>|</li>
                            <li><a href="#" class="active">Event Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Banner -->


    <!-- == Upcomming Event == -->
    <div class="event-detail-body mt100 mb50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="event-detail-item">
                        <div class="image">
                            <img src="images/<?php echo $row1['image']?>" class="img-responsive" alt="event image">

                        </div>
                        <div class="event-header-inner">
                            <ul class="meta">
                                <li class="bt-author"><i class="fa fa-user"></i>By <span><?php echo $row1['ngo_name']?></span></li>
                                <li class="bt-location"><i class="fa fa-map-marker"></i><span><?php echo $row1['venue']?></span></li>
                                <li class="bt-location"><i class="fa fa-calendar-o"></i>Date <span><?php echo $row1['createddate']?></span></li>
                            </ul>
                            <!-- <h4>Clothes For Everyone</h4> -->
                            <div class="donate-meta">
                                <h3><a href="#"><?php echo $row1['event_name'];?></a></h3>
                                <div class="donation-money">
                                    <span class="pdt15"><span class="raised green"> <?php echo $row1['event_description']?></span></span>
                                     <a href="donate.php" class="green-button button-hover-one pull-right">Donate Now</a>
                                </div>

                            </div>
                            
                        </div>
                        <div class="event-contet">
                         
                       
						  </div><br><br>
                       

                    </div><!--/.upcoming-event-item-->
                </div>
                 <div class="col-lg-3 col-md-4">
                    <div class="sidebar">
                       
                        
                       
                    </div>
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
                        <a href="feedback.php" class="white-button">Feedback<i class='ion-ios-arrow-thin-right'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Get strated  -->
 
    <footer>
	<?php
	include("footer.php");	
	?>
    </footer>

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


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:52 GMT -->
</html>
