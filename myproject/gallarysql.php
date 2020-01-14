<?php
include('dbconnection.php');
$imgname=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];
move_uploaded_file($tempname,"./image/$imgname");
$query="INSERT INTO `image_table`(`image`) VALUES ('$imgname')";
$run=mysqli_query($conn,$query);
if($query)
{
    //$data=mysqli_fetch_assoc($run)
    //print_r($data);
    echo"connected";
}
else{
    print"not found";
}
?>