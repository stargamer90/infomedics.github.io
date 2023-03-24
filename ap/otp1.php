<?php require_once("..\config\connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		
		$query = "select * from admin where admin_emailid = '".$username."'";
		
		
		$result = mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result);
		if (mysqli_num_rows($result) == 1) {
		
			$arr = array();
		
				$to = $row['admin_emailid'];
				$arr = $row	;
				
			$otp = mt_rand(000000,999999);
			$query1 = "update admin set otp = ".$otp.", otpused = 0 where 
			admin_emailid = '".$to."'";
	
		
			$result1 = mysqli_query($conn,$query1);
			
			if ($result1) {
		
				$message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
				$subject = "Request For OTP";		
				$mailSent = send_mail($to, $message, $subject);
				if ($mailSent) {
					
					session_start();
					$_SESSION['admin_id'] = $to;
					echo "<script>
								window.location='resetPassword.php';
					      </script>";
				} else {
					
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
 <body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
    <input type = "text" name="username" id="uname" />
	<input type="submit" name="submit" />
  </form>
 </body>
</html>