<?php
/*$hname=$_POST['hname'];
$hcontact=$_POST['hcontact'];
$hemail=$_POST['hemail'];
$hid=$_POST['hid'];
//$hpicture=$_FILES['hpicture']['name'];
//$htemp=$_FILES['hpicture']['tmp_name'];
//move_uploaded_file($htemp,".admin/$hpicture");
$imgname=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];
move_uploaded_file($tempname,"./admin/$imgname");
//move_uploaded_file($tempname,"./admin/$imgname");
$categary=$_POST['category'];
$capicity=$_POST['hroom'];
$region=$_POST['region'];
$place=$_POST['place'];
$city=$_POST['city'];
$street=$_POST['street'];
include('dbconnection.php');
$query="INSERT INTO `newcustomer`( `hid`, `hname`, `hcontact`, `hpicture`, `category`, `hroom`,`region`,
 `place`, `city`, `street`, `hemail`)VALUES ('$hid','$hname','$hcontact','$tempname','$categary','$capicity','$region','$place','$city','$street','$hemail')";
$run=mysqli_query($conn,$query);
if($run)
{
    echo "connected successfully";
} 
else
{
    echo"sorry";
}*/
echo "welcome"
 ?>