<!DOCTYPE html>
<?php require_once("../config/connection.php");?>
<html lang="en">

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charity || Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================= Favicon ================== -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CRoboto+Condensed:300,400,700%7CRoboto:300,400,500,700,900%7CRubik:300,400,500,700,900%7CCabin:400,500,600,700%7CGabriela" rel="stylesheet">
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
                        <h1>Post</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>|</li>
                            <li><a href="#" class="active">Post</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Banner -->
    <!-- == Image box == -->
    <div class="blog-detail-page mt85 mb60">
        <div class="container">
            <div class="row">
			<?php
							$sql="Select p.post_id,p.post_amount,n.ngo_name,p.post_start ,p.post_end ,e.image  from post p,events e,ngo n
	 where p.ngo_id=e.ngo_id and p.ngo_id = n.ngo_id ";
							
							$result= mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
							{
						?>
                <div class="col-lg-9 col-md-8">
                    <article class="blog-post ">
                        <div class="image">
                            <img src="images/<?php echo $row['image'];?>" class="img-responsive" alt="blog image" />
                        </div>
                        <div class="blog-text" style="border:1px solid white;">
                            <div class="meta-description">
								<span class="post-categories"><i class="fa fa-street-view"></i>
                                    NGO Name : <a href="#"><?php echo $row['ngo_name'];?></a>
                                </span><br><br>
                                <span class="post-date"><i class="fa fa-calendar"></i>&nbsp;
                                    Posted Date: <a href="#"><?php echo $row['post_start'];?></a>
                                </span><br>
								<span class="post-date"><i class="fa fa-calendar-times-o"></i>&nbsp;
                                    End Date: <a href="#"><?php echo $row['post_end'];?></a>
                                </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
                                
                                  </div>
                            <div class="blog-content">
                                <h3><a href="#"><i class="fa fa-rupee"></i>&nbsp;&nbsp;<?php echo $row['post_amount'];?></a></h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <a class="green-button button-hover-one" href="contact.php">Reply</a>		         
								
								
                            </div>

                        </div>
                    </article>        
                    
                    
                </div><?php 
							}
							?>

                
            </div>
        </div>
    </div><br><br>
    <!-- //  Image box  -->



    <!-- == Get strated == -->
    
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
	<!-- == Slick carousel == -->
    <script src="js/slick.js"></script>
    <!-- == jquery mb YTPlayer == -->
   <script src="js/jquery.mb.YTPlayer.js"></script>
	<!-- == Zingchart == -->
    <script src="js/zingchart.min.js"></script>
	<!-- == Prallex == -->
    <script src="js/prallex.js"></script>

	<!-- == custom Js File == -->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:43 GMT -->
</html>
