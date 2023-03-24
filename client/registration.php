<?php require_once("..\config\connection.php");
							


	
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
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
<style>
body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	background:url(h4.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#00bcd4;;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:;
	font-size:12px;
}
.login-form .group .button{
	background:#00bcd4;;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#00bcd4;;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
</style>
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="post" action="">
					<div class="login100-form-avatar">
						<img src="download.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Welfare Foundation
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="ngo_name" placeholder=" Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="ngo_description" placeholder=" Description" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="ngo_address1" placeholder=" Address1" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="ngo_address2" placeholder=" Address2" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="tel" name="ngo_contact" placeholder=" Contact No" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div><div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="password" name="ngo_password" placeholder=" Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="email" name="ngo_emailid" placeholder=" Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="tel" name="registration_id" placeholder=" Registration Id" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label"></label>
																											<div class="col-sm-8"><select name="area_id" id="area_id" class="form-control1">
																												<?php 
																										$records = mysqli_query($conn,"SELECT * from area ");
																										while ($row = mysqli_fetch_array($records))
																										{
																												?>
																										<option value="<?php echo $row["area_id"]?>"><?php echo $row["area_name"];?></option>
																												<?php
		 
																										}
																												?>
																											</select>
																											</div>
																									</div>

					
					<div class="container-login100-form-btn p-t-10">
					
						<input type="submit" name="submit" class="login100-form-btn">
						
					
						<br>
					</div>

					

					<div class="text-center w-full">
						<a class="txt1" href="login.php">
							Login
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
<?php
	//$id=$_SESSION['donor_id'];
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["ngo_name"]) && isset($_POST["ngo_description"]) && isset($_POST["ngo_address1"]) && isset($_POST["ngo_address2"]) 
								&& isset($_POST["ngo_contact"]) && isset($_POST["ngo_password"]) && isset($_POST["ngo_emailid"]) && isset($_POST["registration_id"]) && isset($_POST["area_id"]))
							{ 
								$ngo_name=$_POST["ngo_name"];
								$ngo_description=$_POST["ngo_description"];
								$ngo_address1=$_POST["ngo_address1"];
								$ngo_address2=$_POST["ngo_address2"];
								$ngo_contact=$_POST["ngo_contact"];
								$ngo_password=$_POST["ngo_password"];
								$ngo_emailid=$_POST["ngo_emailid"];
								$registration_id=$_POST["registration_id"];
								//$donor_id=$_POST["donor_id"];
								$area_id=$_POST["area_id"];
								
								if($ngo_name!='' &&  $ngo_description!='' && $ngo_address1!='' && $ngo_address2!='' && $ngo_contact!='' && $ngo_password!='' && $ngo_emailid!=''&& $registration_id!=''&& $area_id!='')
								{
									echo "value not null";
									$sql = "insert into ngo(ngo_name,ngo_description,ngo_address1,ngo_address2,ngo_contact,ngo_password,ngo_emailid,registration_id,area_id)
									values('".$ngo_name."','".$ngo_description."','".$ngo_address1."','".$ngo_address2."','".$ngo_contact."','".$ngo_password."','".$ngo_emailid."','".$registration_id."','".$area_id."')";
									
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
	<script src="js/main.js"></script>

</body>
</html>