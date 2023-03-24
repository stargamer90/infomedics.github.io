<?php
require_once("../config/connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		
		$query = "select * from donor where donor_emailid = '".$username."'";
		
		
		$result = mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result);
		if (mysqli_num_rows($result) == 1) {
		
			$arr = array();
		
				$to = $row['donor_emailid'];
				$arr = $row	;
				
			$otp = mt_rand(000000,999999);
			$query1 = "update donor set otp = ".$otp.", otp_used = 0 where 
			donor_emailid = '".$to."'";
	
		
			$result1 = mysqli_query($conn,$query1);
			
			if ($result1) {
		
				$message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
				$subject = "Request For OTP";		
				$mailSent = send_mail($to, $message, $subject);
				if ($mailSent) 
				{
					
					session_start();
					$_SESSION['donor_id'] = $to;
					echo "<script>
								window.location='reset.php';
					      </script>";
				}
				else 
				{
					
				}
				//$array = array('status' => '200' , 'details' => $arr);
			}	
			
		}	
		
	} else {
		echo "asdasasdad"; die;
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
<form method="post" >
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Forgot</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">E-mail</label>
					<input id="email" name="username" type="email" class="input" required>
				</div>
				<div class="group">
						<a href="index.php"></a>
					<input type="submit" class="button" onClick="myFunction()" value="Sign In"><a href="index.php"></a>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="reset.php">Reset</a>
				</div>
			</div>
		</div>
		
	</div>
</div>
</form>
</body>
</html>
		