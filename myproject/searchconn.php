<?php
include('dbconnection.php');
$search=$_POST['search'];
$query="INSERT INTO `searchdata`(`hname`) VALUES ('$search')";
$run=mysqli_query($conn,$query);
if($run)
{
    header('location:adminsearchinsert.php');
}
?>