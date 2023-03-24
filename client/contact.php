<!DOCTYPE html>
<html lang="en">
<?php require_once("..\config\connection.php");?>
<!-- Mirrored from iglyphic.com/themes/html/html_elevation/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welfare Foundation || Contact Us</title>
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
	   include("header.php");
	   ?>
    </header>
    <!-- == Banner== -->
    <div class="banner-area pdt100 pdb100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>|</li>
                            <li><a href="#" class="active">Contact Us</a></li>
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
                             <h2>Do you need more information?</h2>
							 <h3>You can contact us!!</h3>
                         </div>
                       
                        
                         <div class=" topbar-social">
                            
                         </div>
                     </div>
                 </div>
               <form method="post" action="">
                   <div class="row">
                       <div class="col-sm-6">
                           <div class="single-input-box">
                                <input type="text" placeholder="Name" name="name" class="form-control" style="border:1px solid black;">

                            </div>
                       </div>
                       <div class="col-sm-6">
                           <div class="single-input-box">
                               <input type="email" placeholder="Email ID" name="emailid" style="border:1px solid black;" class="form-control">

                           </div>
                       </div>
                   </div>
                    <div class="single-input-box">
                        <textarea cols="40" placeholder="Type here message" name="message" style="border:1px solid black;"></textarea>
                    </div>
					<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">NGO Name</label>
																											<div class="col-sm-8">
																											<select name="ngo_name" id="ngo_name" class="form-control1" style="width:350px;height:50px;border:1px solid black;">
																												<?php 
																												$records = mysqli_query($conn,"SELECT * FROM ngo ");
																												while ($row = mysqli_fetch_array($records))
																													{
																													?>
																												<option value="<?php echo $row["ngo_id"]?>"><?php echo $row["ngo_name"];?></option>
																												<?php
		 
     
																												}
																												?>
																												
																											</select>
																											</div>
																									</div>
																									<br><br>
                    <button type="submit" value="Send Message" name="submit" class="green-button">Send Message</button>
               </form>
            </div>
        <div class="google-maps" id="footer-map-canvas"></div>
    </div>
	<?php 
							

if (isset($_POST['submit']))
{
	
	$name = $_POST['visitor_name'];
	$email = $_POST['visitor_emailid'];
	$message = $_POST['message'];
 $ngo_name= $_POST['ngo_name'];
    // $query = "INSERT INTO contact (visitor_name,visitor_emailid,message,ngo_id) VALUES 
	 //( '$name','$email','$message','$ngo_id')";
	 $query = "INSERT INTO contact (visitor_name,visitor_emailid,message,ngo_id) VALUES 
	 ( '$ename','$email','$message','$ngo_name')";
	 echo $query;
	 echo die;

if (mysqli_query($conn, $query)) {	
    echo "		<script>
						alert('Message Send !');
						window.location='../client/contact.php';
					</script>";
} else {
    echo "Error Inserted record: " . mysqli_error($conn);
}

 }
?>
	
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
                        <p>For more information contact us on given Email...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <span class="email-id">welfarefoundation217@gmail.com</span>
                    </div><!--/.contact-information-->
                </div>
                <!--<div class="col-md-4 col-sm-6">
                    <div class="contact-information phone" >
                        <div class="icon-hading mb20">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="heading">
                                Call us
                            </div>
                        </div>
                        <span class="mobile-number">+91-9586426</span>
                        <p>For any support you can contact on above given number.</p>-->
                    </div><!--/.contact-information-->
                </div>
                
            </div>

        </div>
    </section>
    <!-- //.Contact body  -->
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
