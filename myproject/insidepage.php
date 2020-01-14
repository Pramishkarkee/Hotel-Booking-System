<?php
include('dbconnection.php');
$id=$_GET['id'];
//echo $id;
$query="SELECT * FROM `newcustomer`";
$run=mysqli_query($conn,$query);
while($data=mysqli_fetch_assoc($run))
{
    if($data['ID']==$id)
    {
        ?>name:<?php echo $data['hname'];?>
        contact number:<?php echo $data['hcontact'];?>
        <?php
    }
}
?>