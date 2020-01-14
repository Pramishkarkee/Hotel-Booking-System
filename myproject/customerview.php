<table border="1px" align="center" >
<tr>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Hotel Name</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Email Address</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Phone Number</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Address</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">View</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Delete</th></tr>
<?php include("dbconnection.php");
$query="select *from `newcustomer`";
$run=mysqli_query($conn,$query);
if($run)
{
    while($data=mysqli_fetch_assoc($run))
    {?><tr>
      <td><?php echo $data['hname']?></td>
      <td><?php echo $data['hemail']?></td>
      <td><?php echo $data['hcontact']?></td>
      <td><?php echo $data['city']?></td>
      <td><a href="viewadmin.php?id=<?php echo $data['ID']?>" class="btn btn-primary" style=" margin-left:2px;padding-left:40px; padding-right:40px">view</a></td>
      <td><a href=""class="btn btn-danger" style=" margin-left:2px;padding-left:40px; padding-right:40px">delete</a></td>
      </tr>
      <?php
    }
}




?>
</table>