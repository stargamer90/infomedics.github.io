<html>
<head>
<title>
UPDATE FORM
</title>
</head>
<body>
<?php
require_once("../config/connection.php");
if(isset($_GET['id']))
{
$id = $_GET['id'];

$sql="SELECT * from ngo where ngo_id = '".$id."'";
$sql1="select *from area";
$result1=mysqli_query($conn,$sql1);
$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

}	
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100"></td>

</tr>

<tr>
<td width="100">Event name</td>
<td><input type="text" name="ename" value=<?php echo $row['event_name']?>> </td>
</tr>
<tr>
<td width="100">Description</td>
<td><input name="edes" type="text" value=<?php echo $row['event_description']?>></td>
</tr>
<tr>
<td width="100">Venue</td>
<td><input name="venue" type="text" value=<?php echo $row['venue']?>></td>
</tr>
<tr>
<td width="100">Event Image</td>
<td><input name="eimg" type="text" value=<?php echo $row['event_image']?>></td>
</tr>
<tr>
<td width="100">ngo id</td>
<td><input name="ngoid" type="text" value=<?php echo $row['ngo_id']?>></td>
</tr>
<tr>
Area:
<select name="area_id">
<?php
while($row1=mysqli_fetch_array($result1))
{
	if(strcmp($row==$row1)==0)
	{
		echo "<option value=".$row1['area_id']."selected>
		".$row1['area_name']."</option>";
	}
	else{
		echo "<option value=".$row1[area_id].">
		".$row['area_name']."</option>";
	}
?>
<?php
}
?>
</select>
</tr>
<tr>
<td width="100">donor id</td>
<td><input name="donorid" type="text" value=<?php echo $row['donor_id']?>></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>

<?php

	
if(isset($_POST['update']))
{
$ename = $_POST['ename'];
$edes = $_POST['edes'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$email = $_POST['email'];
$password = $_POST['password'];
$rid = $_POST['rid'];



$sql = "UPDATE ngo SET ngo_name = '$ngoname', ngo_description = '$ngodes', ngo_address1 = '$add1', ngo_address2 = '$add2',
 ngo_emailid = '$email', ngo_password = '$password' ,registration_id='$rid' WHERE ngo_id =$id";



$retval = mysqli_query($conn,$sql);

echo $retval;
if(! $retval )
{
  echo "Error";
}
else
{
echo "Updated data successfully\n";
header("Location:ngo.php");
}
}

?>
</body>
</html>