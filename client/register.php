<?php require_once('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["donor_emailid"]) && isset($_POST["donor_password"]))
	{
		$email = $_POST["donor_emailid"];
		$pass = $_POST["donor_password"];
		
		if( $email !='' && $pass !='')
		{
			 $sql= "select donor_id,donor_emailid,donor_password from donor where donor_emailid= '".$email."' and donor_password='".$pass."' and isActive = 1";
			
			$result=mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION["donor_id"] = $row['donor_id'];
				
				header("Location:index.php");
			}
			else
			{
				echo"Invalid password";
			}
			
		}
	}
}
?>
<html>
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
<body>
<br>

			<?php 
							

if (isset($_POST['submit']))
{
    $fname   = $_POST['donor_firstname'];
    $lname   = $_POST['donor_lastname'];
  $pass   = $_POST['donor_password'];
     $con   = $_POST['donor_contact'];
	 $add   = $_POST['donor_address'];
	 $em   = $_POST['donor_emailid'];
	 //$area   = $_POST['donor_areaname'];
	 
	 
 $query = "INSERT INTO donor (donor_firstname,donor_lastname,donor_password,donor_contact,donor_address,donor_emailid) VALUES 
	 ( '".$fname."','".$lname."','".$pass."','".$con."','".$add."','".$em."')";

if (mysqli_query($conn, $query)) {	
    echo "		<script>
						alert('Registered!');
						window.location='../client/index.php';
					</script>";

	
}
 else {
    echo "Error Inserted record: " . mysqli_error($conn);
}


}	 
	 
	
?>

			<form method="post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Donor First Name</label>
					<input id="user" type="text" class="input" name="fname">
				</div>
				<div class="group">
					<label for="user" class="label">Donor Last Name</label>
					<input id="user" type="text" class="input" name="lname">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="pass" >
				</div>
				<div class="group">
					<label for="pass" class="label">Contact</label>
					<input id="cn" type="tel" class="input" name="con">
				</div>
				<div class="group">
				
				
					<label for="pass" class="label">Address</label>
					<input id="pass" type="text" class="input" name="add">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="em" type="email" class="input" name="em">
				</div>
				<div class="group">
					<input type="submit" name="submit" class="button" value="Register">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
		
		<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>