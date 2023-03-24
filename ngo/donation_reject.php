<?php
session_start();
require_once("../config/connection.php");

if(isset($_GET['id']))
{
		// $uid=$_GET['uid'];
		$id=$_GET["id"];

				
			$sql="update donation set request_status='2' where donation_id = '".$id."'";
			
				$result=mysqli_query($conn,$sql);
				
			
			
			//$sql1="insert into notification (user_id,description,created_date,booking_id) 
			//values('".$uid."','".$str."','".$d."','".$id."')";
			
			if($result)
				{
					
					header('location:donationreq.php');

				}
			}
		
		else
		{
				echo "Value not set";
		}


?>

