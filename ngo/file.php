<?php
require_once("../config/connection.php");

   if(isset($_FILES['image'])){
      $errors= array();
	  
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=explode('.',$_FILES['image']['name']);

      $expensions= array("jpeg","jpg","png");
      
	  /*
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      */
      if(empty($errors)==true)
	  {
         if(move_uploaded_file($file_tmp,"images/".$file_name)==1)
		 {
			 $query="INSERT INTO events(event_image) values('".$file_name."')";
				echo "Success";
				mysqli_query($conn,$query);
		 }
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST"
	  enctype="multipart/form-data">
        
		<input type="file" name="image" />
         <input type="submit"/>

		 </form>
      
   </body>
</html>


