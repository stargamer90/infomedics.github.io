<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welfare Foundation || Feedback</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================= Favicon ================== -->
    <link rel="shortcut icon" href="logo.png">
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
                        <h1>Feedback</h1>
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li>|</li>
                            <li><a href="#" class="active">Feedback</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Banner -->
		<?php
	
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["feedback"]) && isset($_POST["ngo_name"]))
							{ 
								$amount=$_POST["feedback"];
								$donor_id=$_POST["donor_id"];
								$ngo_id=$_POST["ngo_name"];
								
								if($amount!='' && $ngo_id!='' )
								{
									echo "value not null";
									$sql = "insert into feedback(feedback,donor_id,ngo_id)
									values('$amount','$id','$ngo_id')";
									
									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										   echo "		<script>
						alert('Feedback Send !');
						window.location='../client/feedback.php';
					</script>";
									}
								}
							}
								else
								{
									echo "value not set";
								}
							}
				  
				  ?>
    <!-- == Image box == -->
	<?php
	if(isset($_SESSION['donor_id']))
	{
	?>
    <div class="blog-detail-page mt85 mb60">
        <div class="container">
            <div class="row">
                                                                                    
                    <div class="contact-from pdb50">
                        <h2>Give Feedback</h2>
                       <form method="post" action="#">
		<div class="col-sm-6">
						  <h3>NGO Name</h3>
						<select name="ngo_name" id="ngo_name" class="form-control1" style="width:445px;height:50px;border:1px solid black;">
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
					</div><br><br><br><br><br><br><br><br>
                            <div class="single-input-box">
                                <textarea  style="border:1px solid black;" cols="40" name="feedback" placeholder="Type here message"></textarea>
                                <i class="fa fa-comments"></i>

                            </div>
						<br><br><br>
                            <input type="submit" value="post comment" class="green-button">
                       </form>
                    </div>
                </div>
               
            </div>
        </div><?php
		}
		?>
    </div>
    <!-- //  Image box  -->



    <!-- == Get strated == -->
  
    <!-- // Get strated  -->
    <!-- == Footer == -->
    <footer>
		<?php include("footer.php");
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
