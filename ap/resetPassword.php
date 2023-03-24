<?php 
session_start();
require_once("../config/connection.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	$id=$_SESSION['admin_id'];
	$otp = $_POST['otp'];
	$nPass = $_POST['newpassword'];
	$cPass = $_POST['cpassword'];
	
	if ($nPass != $cPass) {
		echo "password must be same";
		exit;
	}
	
	$query = "update admin set otpused = 1, 
	admin_pass = '".$nPass."' where admin_emailid='".$id."' and 
	otp = '".$otp."' ";

	
	$result = mysqli_query($conn, $query);
	if ($result) {
		
		echo "		<script>
						alert('Password Sucessfully Reset !');
						window.location='../ap/login.php';
					</script>";
	
	
	}
	
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reset Password </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/custom-style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
 
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="msg">Reset Password</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-qrcode"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="otp" placeholder="Enter OTP Code" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password" required>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 p-t-5">
                           
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SUBMIT</button>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

</body>

</html>