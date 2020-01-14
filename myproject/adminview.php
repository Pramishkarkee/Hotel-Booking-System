<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    





<table border="1px" align="center" >
<tr>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Hotel Name</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Email Address</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Phone Number</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Address</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">View</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Delete</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">bookdetail</th></tr>


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
      <td><a href="admindelete.php?id=<?php echo $data['ID']?>"class="btn btn-danger" style=" margin-left:2px;padding-left:40px; padding-right:40px">delete</a></td>
      <td><a href="bookhotellist.php?id=<?php echo $data['ID']?>"class="btn btn-danger" style=" margin-left:2px;padding-left:40px; padding-right:40px">bookdetail</a></td>
      </tr>
      <?php
    }
}




?>
</table>