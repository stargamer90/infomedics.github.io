<?php
require_once("../config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/causes-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:52 GMT -->
<head>
<?php
include("head.php");?>
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
                        <h1>Gallery</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>|</li>
                            <li><a href="#" class="active">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Banner -->

	
	 
    <!-- == Image box == -->
    <div class="causes-grid mb80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-us-gretting pdt95 pdb55">
                        We are <a class="green" href="#">charity/ non-profit/ fundraising/ NGO</a> organizations. 

                    </div>
                </div>
            </div>
           	<?php

	 $sql="Select g.gallery_id , g.image_path, n.ngo_name from gallery g join ngo n
	 where g.ngo_id = n.ngo_id";	
	 $result=mysqli_query($conn,$sql);
	 while($row = mysqli_fetch_array($result))
	 {
	 
	?>	
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="image-box">
                        <div class="image">
                            <img src="../images/<?php echo $row['image_path']?>" alt="charity" />
                            
                        </div>
                        <div class="text">
                            <h3><?php
							echo $row['ngo_name'];
							
							?></h3>
                          
                                                   </div>
                    </div><!--/.image-box-->
                </div><?php
				}
				?>
               <!-- <div class="col-md-4 col-sm-6">
                    <div class="image-box">
                        <div class="image">
                            <img src="img1.jpg" alt="charity" />
                            <a href="#" class="green-button button-hover-one">Donate Now</a>
                        </div>
                        <div class="text">
                            <h3><a href="#">Clean Water for Everyone!</a></h3>
                           
                            <div class="single-progress">
                                <div class="barfiller barfiller50">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                                <div class="raised-goal">
                                    <div class="raised">
                                        RAISED <span class="green">$2,500.00</span>
                                    </div>
                                    <div class="goal text-right">
                                        GOAL <span class="green">$5,000.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.image-box-->
                </div>
              <!--  <div class="col-md-4 col-sm-6">
                    <div class="image-box">
                        <div class="image">
                            <img src="img2.jpg" alt="charity" />
                            <a href="#" class="green-button button-hover-one">Donate Now</a>
                        </div>
                        <div class="text">
                            <h3><a href="#">water system for rural poor</a></h3>
                          
                            <div class="single-progress">
                                <div class="barfiller barfiller50">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                                <div class="raised-goal">
                                    <div class="raised">
                                        RAISED <span class="green">$2,500.00</span>
                                    </div>
                                    <div class="goal text-right">
                                        GOAL <span class="green">$5,000.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.image-box-->
                </div>
              <!--  <div class="col-md-4 col-sm-6">
                    <div class="image-box">
                        <div class="image">
                            <img src="images/home/1.jpg" alt="charity" />
                            <a href="#" class="green-button button-hover-one">Donate Now</a>
                        </div>
                        <div class="text">
                            <h3><a href="#">First charity activity</a></h3>
                           
                            <div class="single-progress">
                                <div class="barfiller barfiller50">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                                <div class="raised-goal">
                                    <div class="raised">
                                        RAISED <span class="green">$2,500.00</span>
                                    </div>
                                    <div class="goal text-right">
                                        GOAL <span class="green">$5,000.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.image-box-->
                </div>
              <!--  <div class="col-md-4 col-sm-6">
                    <div class="image-box">
                        <div class="image">
                            <img src="images/causes/3.jpg" alt="charity" />
                            <a href="#" class="green-button button-hover-one">Donate Now</a>
                        </div>
                        <div class="text">
                            <h3><a href="#">Clean Water for Everyone!</a></h3>
                       
                            <div class="single-progress">
                                <div class="barfiller barfiller50">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                                <div class="raised-goal">
                                    <div class="raised">
                                        RAISED <span class="green">$2,500.00</span>
                                    </div>
                                    <div class="goal text-right">
                                        GOAL <span class="green">$5,000.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.image-box-->
                </div>
                <!--<div class="col-md-4 col-sm-6">
                    <div class="image-box">
                        <div class="image">
                            <img src="images/causes/2.jpg" alt="charity" />
                            <a href="#" class="green-button button-hover-one">Donate Now</a>
                        </div>
                        <div class="text">
                            <h3><a href="#">water system for rural poor</a></h3>
                            <p>
                                As a non-profit organization with many years of opera tion, we always strive for our mission with a modern vision and we hope more people...
                            </p>
                            <div class="single-progress">
                                <div class="barfiller barfiller50">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                                <div class="raised-goal">
                                    <div class="raised">
                                        RAISED <span class="green">$2,500.00</span>
                                    </div>
                                    <div class="goal text-right">
                                        GOAL <span class="green">$5,000.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.image-box-->
                </div>
            </div>
        </div>
    </div>
    <!-- //  Image box  -->
    <!-- == Video Section == -->
    <section class="video-section mt800 green-card">
        <div class="video-box">
            <div class="iamge">
                <img src="images/home/4.jpg" class="img-responsive" alt="" />
            </div>
            <!-- <span class="play-video-button"><a href="#"><i class="fa fa-play-circle"></i></a></span> -->
            <a href="#" class="play-video-button"> <img src="images/home/play-button.png" alt="" /></a>

        </div>
        <div class="short-about-us mt90">
             <h2>Welfare Foundation</h2>
            <p>
                                   Welfare Foundation provides direct communication between NGO and Donor.
					   For charity or any event information donor needs to be registered. The Donor can donate and contact to the owner. This site also provides the feedback option as well as rating functionality.
            </p>
                <div class="round-slider-collection" id="collection-percent"></div>
               
            </div>
        </div>
        <div class="video-box-background">
            <div class="close-video">
                <i class="fa fa-times"></i>
            </div>
        </div>
    </section>
    <!-- // Video Secton= -->

    <!-- == Testimonial == -->
    <section class="testimonial-area mt5 pdb80 white-bg">
        <div class="container-fluid">
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mt85 col-sm-7">
                       <!-- Wrapper for slides -->
                       <div class="carousel-inner ">
                           <div class="item active">
                               <div class="quote">
                                   I understand the difficulties that people face. In order to <strong>contribute to resolve</strong> this problems, our nonprofit organization usually takes part in <strong>charity events</strong> and activities.
                               </div>
                               <p>We are a non-profit organization with a focus on empowering basic needs...</div>
                           <!-- End Item -->
                           <div class="item">
                               <div class="quote">
                                   In order to <strong>contribute to resolve</strong> this problems, our nonprofit organization usually part in <strong>charity events</strong> and activities. I understand the difficulties that people at there faced.
                               </div>
                               <p>As a non-profit organization with many years of operation, we always strive for our mission with a modern vision and we hope more people can contribute to our activities...</p>
     </div>
                           <!-- End Item -->
                           <div class="item">
                               <div class="quote">
                                   Our nonprofit organization usually  understand the difficulties that people have faced. In order to <strong>contribute to resolve</strong> this problems, part in <strong>charity events</strong> and activities.
                               </div>
                               <p>We are a non-profit organization with a focus on empowering basic needs...</div>
                           <!-- End Item -->
                           <div class="item">
                               <div class="quote">
                                   As a non-profit organization with many years of operation, we always strive for our mission with a modern vision and we hope <strong>more people can contribute</strong> to our activities...
                               </div>
                               <p>Bacon questioned the Aristotelian concepts of formal cause and final cause, and promoted the idea that science should study the laws of "simple" natures, such as heat, rather than assuming</p>
                           </div>
                           <!-- End Item -->
                           <div class="service-controller-thumb">
                               <ul class="navigation-control">
                                   <!-- <li class="prev-step"><i class='ion-ios-arrow-left'></i></li> -->
                                   <li class="next-step"><i class='ion-ios-arrow-thin-right'></i></li>
                               </ul>
                           </div>
                       </div>
                       <!-- End Carousel Inner -->

                   </div>
                   <!-- End Carousel -->
                    <div class="col-md-4 col-lg-4  col-sm-5">
                        <ul class="testimonial-carousel-control-nav pdt100">
                            <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                <a href="#" data-toggle="tab">
                                    <img src="images/hv.jpg" class="img-responsive" alt="client thumb" /><span>Hailly Ved</span>
                                </a>
                            </li>
                            <li data-target="#testimonial-carousel" data-slide-to="1">
                                <a href="#" data-toggle="tab">
                                    <img src="img.png" class="img-responsive" alt="client thumb" /><span>Krishna Parekh</span>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Testimonial  -->
    <!-- == Get strated == -->
    <div class="get-started">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left">
                        <div class="content">
                            <h2>Ready To Get Started?</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right text-right">
                        <a href="login.php" class="white-button">Start here<i class='ion-ios-arrow-thin-right'></i></a>
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


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/causes-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:03 GMT -->
</html>
