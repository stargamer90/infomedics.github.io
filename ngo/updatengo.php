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
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);


$row = mysqli_fetch_array($result);

}	
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100"></td>
</tr>
<tr>
Area:
<select name="area_id">
<?php
while($row1=mysqli_fetch_array($result1))
{
	if(strcmp($row[area_id],$row1[area_id])==0)
	{
		echo "<option value='".$row1['area_id']."'  selected>
		".$row1['area_name']."</option>";
	}
	else{
		echo "<option value='".$row1['area_id']."'>
		".$row1['area_name']."</option>";
	}
?>
<?php
}
?>
</select>
</tr>
</tr>

<tr>
<td width="100">NGO name</td>
<td><input type="text" name="ngoname" value=<?php echo $row['ngo_name']?>> </td>
</tr>
<tr>
<td width="100">Description</td>
<td><input name="ngodes" type="text" value=<?php echo $row['ngo_description']?>></td>
</tr>
<tr>
<td width="100">address1</td>
<td><input name="add1" type="text" value=<?php echo $row['ngo_address1']?>></td>
</tr>
<tr>
<td width="100">address2 </td>
<td><input name="add2" type="text" value=<?php echo $row['ngo_address2']?>></td>
</tr>
<tr>
<td width="100">password</td>
<td><input name="password" type="text" value=<?php echo $row['ngo_password']?>></td>
</tr>
<tr>
<td width="100">email</td>
<td><input name="email" type="text" value=<?php echo $row['ngo_emailid']?>></td>
</tr>
<tr>
<td width="100">registration id</td>
<td><input name="rid" type="text" value=<?php echo $row['registration_id']?>></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>

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
$ngoname = $_POST['ngoname'];
$ngodes = $_POST['ngodes'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$email = $_POST['email'];
$password = $_POST['password'];
$rid = $_POST['rid'];
$area_id=$_POST['area_id'];



$sql = "UPDATE ngo SET ngo_name = '$ngoname', ngo_description = '$ngodes', ngo_address1 = '$add1', ngo_address2 = '$add2',
 ngo_emailid = '$email', ngo_password = '$password' ,registration_id='$rid',area_id='$area_id' WHERE ngo_id =$id";



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