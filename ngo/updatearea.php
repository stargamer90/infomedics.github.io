<?php require_once("../config/connection.php");?>
<?php

$aid="";
if(isset($_GET["id"]))
{ 
		$aid = $_GET["id"];
$query = "SELECT * FROM area where area_id = $aid";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$aname = $row['aname'];
$apin = $row['apin'];


}
?>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
    <body>
        <form action="" method = "POST" align="center">


Area Name:
  <input name="aname" size="15" style="height: 19px;"  type="text" required>
<br>
<br>
 Pincode:<br>
  <input name="apin" size="15" style="height: 19px;"  type="text" required>


<button type ="submit" name="submit" value="send to database"> SEND TO DATABASE </button>
</form>
<?php

if(isset($_POST['update']))
{
$aname = $_POST['aname'];
$apin = $_POST['apin'];


$sql = "UPDATE area SET area_name = '$aname', area_pincode = '$apin' WHERE area_id =$aid";

echo $sql;

$retval = mysqli_query($conn,$sql);

echo $retval;
if(! $retval )
{
  echo "Error";
}
else
{
echo "Updated data successfully\n";
header("Location:area.php");
}
}

?>
    </body>
</html>   
