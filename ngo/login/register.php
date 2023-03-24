<?php 

	
	if(isset($_SESSION["ngo_id"]))
	{
		$ngo_emailid = $_SESSION['ngo_id'];
	}
	else
	{
		header("location:../login.php");
	}
?>
<?php
require_once('../connection.php');
?>

 <?php
						$msg="";
						$id=$_SESSION['ngo_id'];
 
						
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["txtcategory"]) && isset($_POST["txtarea"]) && isset($_POST["txtpackage"]) && isset($_POST["txtstart"]) && isset($_POST["txtdescription"]))
							{ 
								$ngo_id=$_POST["ngo_id"];
								$ngo_name=$_POST["ngo_name"];
								$ngo_description=$_POST["ngo_description"];
								$ngo_address1=$_POST["ngo_address1"];
								$ngo_address2=$_POST["ngo_address2"];
								$ngo_contact=$_POST["ngo_contact"];
								$ngo_password=$_POST["ngo_password"];
								$ngo_emailid=$_POST["ngo_emailid"];
								$registration_id=$_POST["registration_id"];
								$file_name = $_FILES["image"]["name"];
								$file_tmp =$_FILES["image"]["tmp_name"];
								
								$q = "select registration_id from ngo where registration_id = $registration_id";
								$res = mysqli_query($conn,$q);
								$r = mysqli_fetch_array($res);
								
								
								if($ngo_id!='' && $ngo_name!=''&& $ngo_description!='' && $ngo_address1!='' && $ngo_address2!='' && $ngo_contact!='' && $ngo_password!='' && $ngo_emailid!='' && $registration_id!='')
								{
									
									
									
									if(move_uploaded_file($file_tmp,"../../images/".$file_name)==1)
									{
									$sql = "insert into ngo(ngo_id,ngo_name,ngo_description,ngo_address1,ngo_address2,ngo_contact,ngo_password,ngo_emailid,registration_id,)
									values('".$ngo_id."','".$ngo_name."','".$ngo_description."','".$ngo_address1."','".$ngo_address2."','".$ngo_contact."',
									'".$ngo_password."','".$ngo_emailid."','".$registration_id."'
									)";
									
									$result=mysqli_query($conn,$sql);
			
										if($result)
										{
											echo hello;
										}
									
									}
									else
									{
										echo error;
									}
								}
							}
								else
								{
									echo "value not set";
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
						<input class="input100" type="text" name="text" placeholder="NGO Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="ngo_description" placeholder="Description">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="ngo_address1" placeholder="Address1">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="ngo_address2" placeholder="Address2">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="ngo_contact" placeholder="Contact">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="email" name="ngo_emailid" placeholder="E-mail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div style="width:380px"  class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
				
					
					
					<div class="container-login100-form-btn">
					<a href="../login/login.php">
						<button class="login100-form-btn" style="background-color:#008B8B; width:250px;margin-center:40px">
							Register
						</button>
					</div>
						
					<div class="text-center p-t-12">
					<a href="../login.php">
						<span class="txt1">
							Already Registered</a>
						</span>
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