<!DOCTYPE html>
<html lang="en">
<?php require_once("..\config\connection.php");?>

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charity || Contact Us</title>
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
<?php
require_once("../config/connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		
		
		
				$message = "<h3>Thank you for Your Subscription ".$username.". WELFARE FOUNDATION</h3>";
				$subject = "Subscribe Confirmation";		
				$mailSent = send_mail($username, $message, $subject);
				if ($mailSent) 
				{
					
					
					 echo "		<script>
						alert('Subscribed !');
						window.location='../client/subscribe.php';
					</script>";		}
				else 
				{
					
				}
				//$array = array('status' => '200' , 'details' => $arr);
			}	
			
		}	
		
	
		 


?>
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
                        <h1>Subscribe</h1>
                        <ul>
                            <li><a href="index.php"Home</a></li>
                            <li>|</li>
                            <li><a href="subscribe.php" class="active">Subscribe</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- == Google Map == -->
     <div class="google-maps-area">
             <div class="contact-from pdb50 text-center">
                 <!-- // Banner -->
                 <div class="do-need-contact">
                     <div class="need-contact text-center mb30">
                         <div class="section-heading pdt20">
                             <h2>Subscribe Here!!</h2>
                         </div>
                       
                        
                         <div class=" topbar-social">
                            
                         </div>
                     </div>
                 </div>
				 
               <form method="post">
                   <div class="row">
                       <div class="col-sm-6">
                           <div class="single-input-box">
                                <input type="email" placeholder="E-mail" name="username" class="form-control" required>

                            </div>
                       </div>
                       
                   </div>
                    
																									
                    <button type="submit" value="Subscribe" name="submit" class="green-button">Confirm</button>
               </form>
			   
            </div>
        <div class="google-maps" id="footer-map-canvas"></div>
    </div>
	
    <!-- // Google Map  -->
    <!-- == Contact body == -->
    <section class="contact-adderss-area pdb70 pdt100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="contact-information email" >
                        <div class="icon-hading mb20">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="heading">
                                Email Us
                            </div>
                        </div>
                        <p>For more information contact us on given Email...</p>
                        <span class="email-id">welfarefoundation@gmail.com</span>
                    </div><!--/.contact-information-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-information phone" >
                        <div class="icon-hading mb20">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="heading">
                                Call us
                            </div>
                        </div>
                        <span class="mobile-number">+00 947 652 852</span>
                        <p>For any support you can contact on above given number.</p>

                    </div><!--/.contact-information-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-information working" >
                        <div class="icon-hading mb20">
                            <div class="icon">
                                <i class="fa ion-code-working"></i>
                            </div>
                            <div class="heading">
                                working hours
                            </div>
                        </div>
                        <span>Week days: 07:30 - 19:00</span>
                        <span>Sunday : Holiday</span>
                        <p>Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsuy veli. Nam nec telus aodio tincidunt auctor Class aptent taciti sociosqu adlitora orquper conubiea Mauris ine odio condimentum sit am lorem thats ornar eodio Sed non mauris vitae erat it an consequat auctor. </p>
                    </div><!--/.contact-information-->
                </div>
            </div>

        </div>
    </section>
    <!-- //.Contact body  -->
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

    <!-- == Google Map == -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyDTje3iuLAYQmMK3153NzxMto6GNzkzuCE"></script>
    <script type="text/javascript" src="js/maps/gmap3.min.js"></script>
    <script type="text/javascript" src="js/maps/map-init.js"></script>
	<!-- == custom Js File == -->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:49 GMT -->
</html>
