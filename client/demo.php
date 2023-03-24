<!DOCTYPE html>
<html lang="en">
h4{color:green;}
<?php
require_once('../config/connection.php');
?>

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:38:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charity || Home Three</title>
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
    
    <header>
        <div class="top-bar-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-xs-8 text-right">
                        <div class="topbar-social">
                            <ul>
                                <li><a href="#!"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#!"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="drop-down-country">
                            <div class="country"><i></i></div>
                            <select>
                                <option value="es">Spain</option>
                                <option value="us">English</option>
                                <option value="bd">Bangla</option>
                                <option value="ind">Hindi</option>
                                <option value="au">Austria</option>
                                <option value="br">Brazil</option>
                                <option value="ca">Canada</option>
                                <option value="uy">Uruguay</option>
                                <option value="ar">Argentina</option>
                                <option value="de">Germany</option>
                                <option value="gb">U K</option>
                                <option value="fr">France</option>
                                <option value="vi">Islands</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Top bar  -->
        <!-- == Navbar  ==-->
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav id="menuzord" class="menuzord">
                            <ul class="menuzord-menu">
                                <li><a href="index.html" class="active">Home</a>
                                    <ul class="dropdown">
                                     <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-two.html">Home Two</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a>
                                </li>
                                <li><a href="event.html">Event</a>
                                    <ul class="dropdown">
                                     <li><a href="event.html">Event</a></li>
                                        <li><a href="event-detail.html">Event Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="causes-grid.html">Causes</a>
                                    <ul class="dropdown">
                                     <li><a href="causes-grid.html">Causes Grid</a></li>
                                        <li><a href="causes-list.html">Causes List</a>
                                    </ul>
                                </li>
                                <li ><a href="blog.html">Blog</a>
                                    <ul class="dropdown">
                                     <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-detail.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="donate.html">Donate</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="search-box-icon">
                            <a href="#!"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="top-search-input-wrap">
                         <i class="ion-android-close close-icon"></i>
                         <div class="top-search-overlay"></div>
                         <form action="#" method="post">
                             <div class="search-wrap">
                                 <div class="search  pull-right educon-top-search">
                                     <div class="sp_search_input">
                                     <input name="searchword" maxlength="200" class="pull-right" placeholder="Search Here" type="text"/></div>
                                     <input name="task" value="search" type="hidden">
                                 </div>
                             </div>
                         </form>
                     </div><!--/.top-search-input-wrap-->
                </div>
            </div>
        </div>
       <!-- // Navbar  -->
    </header>

   <!-- Slider Section -->
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
                                    <h2>Welcome To Elevation</h2>
                                    <h1 class="delay1">Best For Charity</h1>
                                    <p class="delay3">Continually redefine team building products rather than theme parallel world a class growth strategies for awesoem.</p>
                                    <div class="slider-button delay4">
                                        <a href="#" class="green-button button-hover-one">Donate Now <i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
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
                                    <div class="slider-button delay4">
                                        <a href="#" class="green-button button-hover-one">Donate Now <i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
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
                                    <h1 class="delay1">for African Child</h1>
                                    <p class="delay3">Continually redefine team building products rather than theme parallel world a class growth strategies for awesoem.</p>
                                    <div class="slider-button delay4">
                                        <a href="#" class="green-button button-hover-one">Donate Now <i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
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
    <!-- End Slider Section -->
    <section class="feature-service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/home/icon6.png" alt="">
                        </div>
                        <div class="text">
                            <h3><a href="#">Crowdfunding</a></h3>
                            <p>Our church is open and friendly with masocial activities. To keep our church running smoothly, we have committees anyone can join.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/home/icon7.png" alt="">
                        </div>
                        <div class="text">
                            <h3><a href="#">Donating</a></h3>
                            <p>Our church is open and friendly with masocial activities. To keep our church running smoothly, we have committees anyone can join.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="become-volienter pdb80">
                        <div class="text">
                            <h3> BECOME A<br>
                            <span class="green">VOLUNTEER</span></h3>
                            <p >We can Change everything together</p>
                            <p class="border">Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit dum in sagittis. Nulla or narjusto laoreet onse ctetur adipisci adipiscing elitliquam vitae fring.</p>
                        </div>
                        <a class="green-button button-hover-one" href="#!">Sign up today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- == Video Section == -->
    <section class="video-section green-card">
        <div class="video-box">
            <div class="iamge">
                <img src="images/home/4.jpg" class="img-responsive" alt="" />
            </div>
            <!-- <span class="play-video-button"><a href="#"><i class="fa fa-play-circle"></i></a></span> -->
            <a href="#" class="play-video-button"> <img src="images/home/play-button.png" alt="" /></a>

        </div>
        <div class="short-about-us mt90">
            <span class="left-rotate">
                 UPDATES FROM OUR GALLERY
            </span>

            <h2>THERE ARE MULTIPLE WAYS YOU CAN HELP OTHERS TO CHANGE THEIR LIVES</h2>
            <p>
                Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsuy veli. Nam nec telus aodio tincidunt auctor Class aptent taciti sociosqu adlitora orquper conubiea Mauris ine odio condimentum sit am lorem thats ornar eodio Sed non mauris vitae erat it an consequat auctor. Donec vel mauris quam.
            </p>
            <div class="round-slider mt70 pdb90">
                <div class="current-collection">
                    $ 699
                    <span>CURRENT COLLECTION</span>

                </div>
                <div class="round-slider-collection" id="collection-percent"></div>
                <div class="terget-need">
                    $ 12399
                    <span>TARGET NEEDED</span>
                </div>
            </div>
        </div>
        <div class="video-box-background">
            <div class="close-video">
                <i class="fa fa-times"></i>
            </div>
        </div>
    </section>
    <!-- // Video Secton= -->

    <!-- == Image box == -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-us-gretting pdt95 pdb35">
                        We are <a class="green" href="#">charity/ non-profit/ fundraising/ NGO</a> organizations. Our charity activities are taken place around the world.
                        <span class="sub">You Can Help Lots Of People By Donating Little. See Our Causes</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="image-box">
                        <div class="image">
                            <img src="images/home/1.jpg" alt="charity" />
                            <a href="#" class="green-button button-hover-one">Donate Now</a>
                        </div>
                        <div class="text">
                            <h3><a href="#">First charity activity</a></h3>
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
                <div class="col-md-4 col-sm-4">
                    <div class="image-box">
                        <div class="image">
                            <img src="images/home/2.jpg" alt="charity" />
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
                <div class="col-md-4 col-sm-4">
                    <div class="image-box">
                        <div class="image">
                            <img src="images/home/3.jpg" alt="charity" />
                            <a href="#" class="green-button button-hover-one">Donate Now</a>
                        </div>
                        <div class="text">
                            <h3><a href="#">Education for Children</a></h3>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt30">
                        <a href="#" class="button-style-two">See All</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- //  Image box  -->
    <!-- == Testimonial == -->
    <section class="testimonial-area mt100 pdb80">
        <div class="container-fluid">
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mt85 col-sm-7">
                       <!-- Wrapper for slides -->
                       <div class="carousel-inner ">
					   
					   <?php
					  
						$sql1 = "select * from feedback f join donor d where f.donor_id = d.donor_id";
						$result1 = mysqli_query($conn,$sql1);
						$row1=mysqli_fetch_array($result1);
						?>
						   <div class="item active">
                               <div class="quote">
									<?php echo $row1["feedback"];?>
                               </div>
							   <p>
									<?php echo $row1["donor_firstname"];?>
							   </p>
 
                           </div>
						<?php
	
						while($row1=mysqli_fetch_array($result1))
						{
					   ?>
					   
							<div class="item">
                               <div class="quote">
									<?php echo $row1["feedback"];?>
                               </div>
															   <h4 >
									<?php echo $row1["donor_firstname"];?>
							   </h4>

                           </div>
                           <!-- End Item -->
                           
						   <?php
						}
						   ?>
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
                    
                </div>
            </div>
        </div>
    </section>
    <!-- // Testimonial  -->
     <!-- == Blog Section == -->
    <section class="blog mb75">
        <div class="container">
            <div class="section-heading text-center section-padding mb50">
                <h2>Our New Stories</h2>
                <span>You Can Help Lots Of People By Donating Little. See Our Blog Feed</span>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-carousel carousel-active">
                        <article class="blog-carousel-item">
                            <img src="images/home/7.jpg" class="img-responsive" alt="blog carousel">
                            <div class="blog-item white">
                                <header  class="blog-heading">
                                    <h4><a href="#">How to survive the tough <br/>path of life</a></h4>
                                    <div class="meta-discibtion">
                                        <span>By <a href="#">Admin</a></span>|<span>Dec 5th, 2016</span>
                                    </div>
                                </header>
                            </div>
                            <img class="over-right" src="images/home/lime.png" alt="">
                        </article><!--/.blog-carousel-item-->
                        <article class="blog-carousel-item">
                            <img src="images/home/7.jpg" class="img-responsive" alt="blog carousel">
                            <div class="blog-item white">
                                <header  class="blog-heading">
                                    <h4><a href="#">How to survive the tough <br/>path of life</a></h4>
                                    <div class="meta-discibtion">
                                        <span>By <a href="#">Admin</a></span>|<span>Dec 5th, 2016</span>
                                    </div>
                                </header>
                            </div>
                            <img class="over-right" src="images/home/lime.png" alt="">
                        </article><!--/.blog-carousel-item-->
                        <article class="blog-carousel-item">
                            <img src="images/home/7.jpg" class="img-responsive" alt="blog carousel">
                            <div class="blog-item white">
                                <header  class="blog-heading">
                                    <h4><a href="#">How to survive the tough <br/>path of life</a></h4>
                                    <div class="meta-discibtion">
                                        <span>By <a href="#">Admin</a></span>|<span>Dec 5th, 2016</span>
                                    </div>
                                </header>
                            </div>
                            <img class="over-right" src="images/home/lime.png" alt="">
                        </article><!--/.blog-carousel-item-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-item-two">
                        <article class="blog-item">
                            <header>
                                <div class="blog-heading">
                                    <h4><a href="#">First charity activity <br/>of thi s summer </a></h4>
                                    <div class="meta-discibtion">
                                        <span>By <a href="#">Admin</a></span>|<span>Dec 5th, 2016</span>
                                    </div>
                                </div>
                            </header>
                            <p>As a non-profit organization with many years of operation, we always strive for our mission with a modern vision and we hope more people can contribute to our activities...</p>
                            <a href="#" class="readmore">More</a>
                        </article><!--/.blog-carousel-item-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <article class="blog-item mb30">
                        <img src="images/home/8.jpg" class="img-responsive" alt="blog image">
                        <div class="content">
                            <header>
                                <div class="blog-heading">
                                    <h4><a href="#">Africa Yoga Project</a></h4>
                                    <div class="meta-discibtion">
                                        <span>By <a href="#">Admin</a></span>|<span>Dec 5th, 2016</span>
                                    </div>
                                </div>
                            </header>
                            <p>Thousands of teenagers across the UK will have school lessons in mindfulness in an experiment designed to see.</p>
                        </div>
                    </article><!--/.blog-carousel-item-->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="blog-style-three mb30">
                        <div class="content">
                            <span>"</span>
                            <p>"printing and typesetting indu stry orem Ipsum been the indu text unkno"</p>
                            <a href="#" class="green">Help us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <article class="blog-item mb30">
                        <img src="images/home/10.jpg" class="img-responsive" alt="blog image">
                        <div class="content">
                            <header>
                                <div class="blog-heading">
                                    <h4><a href="#">First charity activity of this summer</a></h4>
                                    <div class="meta-discibtion">
                                        <span>By <a href="#">Admin</a></span>|<span>Dec 5th, 2016</span>
                                    </div>
                                </div>
                            </header>
                            <p>As a non-profit organization with many years of operation, we always strive for our mission with a modern vision and we hope more people can contribute to our activities...</p>
                        </div>
                    </article><!--/.blog-carousel-item-->
                </div>
            </div>
        </div>
    </section>

    <!-- == Get strated == -->
    <div class="get-started">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left">
                        <div class="content">
                            <h2>Ready To Get Started?</h2>
                            <p>But I must explain to you how all this mistaken idea of denouncing </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right text-right">
                        <a href="#" class="white-button">Start here<i class='ion-ios-arrow-thin-right'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Get strated  -->
      <!-- == Footer == -->
     <footer>
        <div class="main-footer">
            <div class="container">
                <div class="row row-eq-tab">
                    <div class="col-md-4 col-xs-12">
                        <div class="single map">
                            <a href="#"><img src="logo.jpg" alt="footer logo" /></a>
                            <div class="map-bg">
                                <p>
                            “Welfare Foundation” is a website that we will develop using PHP web technology. It provides direct communication between NGO and Donor.
                                </p>
                                <a href="#" class="readmore">Read more <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="topbar-social">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#!"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#!"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#!"><i class="fa fa-pinterest-square"></i></a></li>
                                    <li><a href="#!"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="single recent-work">
                            <h3>Recent Work</h3>
                            <ul class="resect-work-carousel">
                                <li>
                                    <div class="work-item">
                                        <img src="images/footer/3.png" class="img-responsive" alt="recent work">
                                        <a href="#!"><i class="ion-search"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-item">
                                        <img src="images/footer/5.png" class="img-responsive"  alt="recent work">
                                        <a href="#!"><i class="ion-search"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-item">
                                        <img src="images/footer/7.png" class="img-responsive"  alt="recent work">
                                        <a href="#!"><i class="ion-search"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-item">
                                        <img src="images/footer/4.png" class="img-responsive"  alt="recent work">
                                        <a href="#!"><i class="ion-search"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-item">
                                        <img src="images/footer/6.png" class="img-responsive"  alt="recent work">
                                        <a href="#!"><i class="ion-search"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-item">
                                        <img src="images/footer/4.png" class="img-responsive"  alt="recent work">
                                        <a href="#!"><i class="ion-search"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="work-item">
                                        <img src="images/footer/6.png" class="img-responsive"  alt="recent work">
                                        <a href="#!"><i class="ion-search"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <a class="readmore" href="#">View more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="single resent-post">
                            <h3>Recent Posts</h3>
                            <ul>
                                <li><a href="#">How you can impact your customers</a><span>Just Now</span></li>
                                <li><a href="#">Charity is all about quality</a><span>5 Hours Ago</span></li>
                                <li><a href="#">Is your website user friendly?</a><span>Today</span></li>
                                <li><a href="#">Evaulation offers weekly updates &amp; more</a><span>Yesterday</span></li>
                                <li><a href="#">Your customers should love your web</a><span>3 Days Ago</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-sm-push-4">
                        <div class="footer-menu text-right">
                            <ul>
                                <li><a href="#!">Home</a></li>
                                <li><a href="#!">About</a></li>
                                <li><a href="#!">Services</a></li>
                                <li><a href="#!">Portfolio</a></li>
                                <li><a href="#!">Blog</a></li>
                                <li><a href="#!">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-pull-8">
                        <div class="copyright-text">
                            &copy; COPYRIGHT IGLYPHIC
                        </div>
                    </div>

                </div>
            </div>
        </div>
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


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:00 GMT -->
</html>
