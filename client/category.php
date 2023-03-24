<!DOCTYPE html>
<?php require_once("../config/connection.php");?>
<html lang="en">

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:00 GMT -->
<head>
<style>

</style>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welfare Foundation || Categories</title>
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
                        <h1>Category </h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>|</li>
                            <li><a href="#" class="active">NGO Categories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <!-- // Banner -->

    <!-- == Upcomming Event == -->
	  <form method="post" action="category.php">
						<select name="area" id="area_name" class="form-control1" style="width:445px;height:50px;margin-top:0px;margin-left:700px;border:1px solid black;">
							<?php 
							$records = mysqli_query($conn,"SELECT * FROM area ");
							while ($row = mysqli_fetch_array($records))
							{
								$id=$row['area_id'];
							?>
							<option value="<?php echo $row["area_id"]?>"><?php echo $row["area_name"];?></option>
							<?php
										}
							?>
						</select>
					
	 <button type="submit"value="Send Message" name="submit" style="margin-top:0px;margin-left:30px;"class="green-button">Search</button>
	 </form>
	 
<?php
							$sql="select n.ngo_name,g.image_path from gallery g join ngo n where n.ngo_id = g.ngo_id  ";

							if (isset($_POST["area"]) )
							{
								
								$area=$_POST["area"];
							
								$sql = $sql . " and n.area_id = $area";
							
							}
				  
?>
				  
	    <div class="upcoming-event-body mt100 mb50">
        <div class="container">
            <div class="row">
			<?php

							
							$result= mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
							{
						?>
						
                <div class="col-sm-4">				
                    <div class="upcoming-event-item">       					
                        <div class="event-detail">						
                            
							
							<div class="col-md-9 col-lg-9  col-sm-9">
                        <ul class="testimonial-carousel-control-nav pdt100">
                            <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                <a href="#" data-toggle="tab">
                                    <img src="../images/<?php echo $row['image_path'];?>" height="500" width="500" class="img-responsive" alt="client thumb" />
									
									
									<p style="margin-left:100px;font-size:18px;color:#00bcd4;"><?php echo $row['ngo_name'];?></p>
                                </a>

                            </li>                        
                        </ul>							
						</div>
                         
                        </div>
                    </div><!--/.upcoming-event-item-->
                </div><?php 
							}
							?>
							
            </div>            
        </div>                  
        </div>
            </div>
        </div>
    </div>
	 
    <!-- // Testimonial  -->
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
	<!-- == custom Js File == -->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:47 GMT -->
</html>
