<!DOCTYPE html>
<html lang="en"><?php require_once("..\config\connection.php");
//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'welfare_business@gmail.com'; //Business Email
?>

<?php
    //Fetch products from the database
    $results = $conn->query("SELECT d.donor_firstname, d1.amount from donor d join donation d1 where d.donor_id =d1.donor_id");
    while($row = $results->fetch_assoc()){ 
    
    } ?>

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/donate.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welfare Foundation || Donate</title>
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
    <!-- == Top bar  ==-->
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
                        <h1>Donate</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>|</li>
                            <li><a href="#" class="active">Donate</a></li>
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
							if (isset($_POST["amount"]) && isset($_POST["ngo_name"]))
							{ 
								$amount=$_POST["amount"];
								//$donor_id=$_POST["donor_id"];
								$ngo_id=$_POST["ngo_name"];
								
								if($amount!='' && $ngo_id!='' )
								{
									echo "value not null";
									$sql = "insert into donation(amount,donor_id,ngo_id)
									values('".$amount."','".$id."','".$ngo_id."')";
									
									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										echo "<meta http-equiv='refresh' content='0;index.php'>";
									}
								}
							}
								else
								{
									echo "value not set";
								}
							}
				  
				  ?>
    <!-- == Donate body== -->
    <div class="donate-page-body mt85 pdb100">
       <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="make-diffirent-for">
                        <h2 class="green">Make a Difference </h2>
                        <h4>
                           It's not how much we give but how much love we put into giving.
                        </h4>
                    </div><br><br>
                    <div class="donate-form">
                       
                        <form action="<?php echo $paypalURL;?>"  method="post">
                            
                            <div class="enter-amount">
                                <h3>Enter your amount</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <input placeholder="Amount" name="amount" class="form-control" style="border:1px solid black;" type="number" min="100">
                                        </div>
                                    </div>
                                </div>
																			
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
					</div><br><br><br><br><br><br>
					<input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['donor_firstname']; ?>">
		<input type="hidden" name="amount" value="<?php echo $row['amount']; ?>">
          <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/demo/Paypal/cancel.php'>
		
        <input type='hidden' name='return' value='http://localhost/demo/Paypal/success.php'>
        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0" value="Send Message" class="green-button"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                            </div><br><br><br><br><br><br>
				
                            <!--<div class="billing-information"><br>
                                <h2>Billing Information</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <label>First Name*</label>
                                            <input placeholder="First Name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <label>Last Name*</label>
                                            <input placeholder="Last Name" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-box">
                                    <label>Street*</label>
                                    <input placeholder="Street" class="form-control" type="text">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <label>City*</label>
                                            <input placeholder="City" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <label>State</label>
                                            <input placeholder="State" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <label>ZIP Code*</label>
                                            <input placeholder="ZIP Code" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <label>Email*</label>
                                            <input placeholder="Email" class="form-control" type="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
					
                            <div class="billing-information">
                                <h2>Payment Information</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <label>Credit Card Number*</label>
                                            <input placeholder="Card Number" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-input-box">
                                            <label>Expiration Date*</label>
                                            <input value="12" class="form-control" type="number">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-input-box">
                                            <label>Expiration Year*</label>
                                            <input value="2017" class="form-control" type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-input-box">
                                            <label>CVV Number* <a href="#">What is this?</a></label>
                                            <input placeholder="CVV Number" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit"  value="MAKE YOUR DONATION" class="green-button button-hover-one">
                            </div><-->
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
    <!-- //  Donate body -->
    <!-- == Get strated == -->
    <div class="get-started">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left">
                        <div class="content">
                            <h2>Ready To Get Started?</h2>
							  <p>We all need people who will give us feedback.That's how we improve. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right text-right">
                        <a href="feedback.php" class="white-button">Give Feedback<i class='ion-ios-arrow-thin-right'></i></a>
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

    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/donate.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:40:43 GMT -->
</html>
