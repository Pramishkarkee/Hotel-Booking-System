<?php
include('dbconnection.php');
$uname=$_POST['uname'];
$cpassword=$_POST['cpassword'];
$changepass=$_POST['changepass'];
$newpass=$_POST['newpass'];
//$query="SELECT * FROM `adminauthority` WHERE `username'='$uname' AND  `adpass`='$cpassword' ";
if($changepass==$newpass)
{
$query="UPDATE `adminauthority` SET `username`='$uname',`adpass`='$newpass' WHERE `username`='$uname' AND `adpass`='$cpassword' ";
$run=mysqli_query($conn,$query);
if($run)
{
 ?><script>alert("change admin password successfully");</script>
 <?php header('location:loginhtml.php');
}

}

?>