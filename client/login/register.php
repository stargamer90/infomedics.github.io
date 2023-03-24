<?php require_once('connection.php');
if (isset($_POST['submit']))
{
	
	$donor_firstname = $_POST['donor_firstname'];
	$donor_lastname = $_POST['donor_lastname'];
	$donor_password = $_POST['donor_password'];
 $donor_contact= $_POST['donor_contact'];
	$donor_address= $_POST['donor_address'];
	$donor_emailid= $_POST['donor_emailid'];
     $query = "INSERT INTO donor (donor_firstname,donor_lastname,donor_password,donor_contact,donor_address,donor_emailid) VALUES 
	 ( '$donor_firstname','$donor_lastname','$donor_password','$donor_contact','$donor_address','$donor_emailid')";
echo$query;
die;
if (mysqli_query($conn, $query)) {	
    echo "		<script>
						alert('Registered Successful !');
						window.location='../login/login.php';
					</script>";
} else {
    echo "Error Inserted record: " . mysqli_error($conn);
}

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color:#0099cc;">
	
	<div class="limiter">
		<div class="container-login100" style="background-color:#008B8B";>
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form"  method="post">
					<span class="login100-form-title">
						 Register
					</span>

					<div style="width:380px" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="donor_firstname" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
<div style="width:380px" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="donor_lastname" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
<div style="width:380px" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="password" name="donor_password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
<div style="width:380px" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="number" name="donor_contact" placeholder="Contact No">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
<div style="width:380px" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="donor_address" placeholder="Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
<div style="width:380px" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="donor_emailid" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
					<a href="../login/login.php">
						<button class="login100-form-btn" style="background-color:#008B8B; width:250px;margin-center:40px">
							Register
						</button>
					</div>
					
					<div class="text-center p-t-136">
						<a class="txt2" href="../login/login.php">
							Already a User???
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>