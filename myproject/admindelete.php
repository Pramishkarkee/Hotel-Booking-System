<?php 
include('dbconnection.php');
$id=$_GET['id'];
$query="DELETE FROM `newcustomer` WHERE `ID`=$id";
$run=mysqli_query($conn,$query);
if($run)
{
    $query1="DELETE FROM `myadmin` WHERE `ID`=$id ";
    $run1=mysqli_query($conn,$query1);
    if($run)
    {
        ?>
        <script>
        alert("delete successfully");
        </script><?php
        include('adminview.php');
    }
}
?>