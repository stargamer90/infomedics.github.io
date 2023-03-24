<?php require_once("../config/connection.php");?>
 
<?php
if (isset($_POST['submit']))
{
    $ename  = $_POST['ename'];
    $edes= $_POST['edes'];
    $venue = $_POST['venue'];
    $eimg  = $_POST['eimg'];
	$ngo_name = $_POST['ngo_name'];
	$area_id = $_POST['area_id'];
	$donor_name = $_POST['donor_name'];
 
     $query = "INSERT INTO events (event_name,event_description,venue,event_image, ngo_id,area_id,donor_id) VALUES 
	 ( '$ename','$edes','$venue','$eimg','$ngo_name','$area_id','$donor_name')";

if (mysqli_query($conn, $query)) {	
    echo "Record Inserted successfully";
} else {
    echo "Error Inserted record: " . mysqli_error($conn);
}

 }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
    <body>
        <form action="" method = "POST" align="center">

   Event Name:   <br>
     <input name="ename" size="15" style="height: 19px;"  type="text" required>

  <br><br>
  Event Description:<br>
  <input type="text" name="edes" required>
  
  <br><br>
 
  Venue:<br>
  <input name="venue" size="15" style="height: 19px;"  type="text" required>
     &nbsp; &nbsp; &nbsp; 
  

  <br><br>

   Event Image:<br>
  <input name="eimg"  type="text" required><br><br>

NGO Name:
  <select name="ngo_name">
<?php 
     $records = mysqli_query($conn,"SELECT * FROM ngo ");
     while ($row = mysqli_fetch_array($records))
	 {
		 ?>
		 <option value="<?php echo $row["ngo_id"]?>"><?php echo $row["ngo_name"];?></option>
		 <?php
		 
     
    }
?>
</select>
<br>
<br>
Area Name:
  <select name="area_id">
<?php 
     $records = mysqli_query($conn,"SELECT * FROM area ");
     while ($row = mysqli_fetch_array($records))
	 {
		 ?>
		 <option value="<?php echo $row["area_id"]?>"><?php echo $row["area_name"];?></option>
		 <?php
		 
     
    }
?>
</select>
<br>
<br>

Donor Name:
  <select name="donor_name">
<?php 
     $records = mysqli_query($conn,"SELECT * FROM donor ");
     while ($row = mysqli_fetch_array($records))
	 {
		 ?>
		 <option value="<?php echo $row["donor_id"]?>"><?php echo $row["donor_firstname"];?></option>
		 <?php
		 
     
    }
?>
</select>
<br>
<br>

<button type ="submit" name="submit" value="send to database"> SEND TO DATABASE </button>
</form>
    </body>
</html>   
