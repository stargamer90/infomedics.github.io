<?php
session_start();
require_once("../config/connection.php");

if(isset($_GET['id']))
{
	    //$uid=$_GET['uid'];
		$id=$_GET["id"];

				
			 $sql="update ngo set request_status='1' where ngo_id = '".$id."'";
			
			//echo $sql;
			//die;
				$result=mysqli_query($conn,$sql);
			
			
			
			//$sql1="insert into notification (user_id,description,created_date,booking_id) values
			//('".$uid."','".$str."','".$d."','".$id."')";
			
			//$result=mysqli_query($conn,$sql1);
	
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


