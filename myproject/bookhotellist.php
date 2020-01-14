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
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Country</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">City</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">Grant</th>






<?php
  include('dbconnection.php');
  $id=$_GET['id'];
  //echo $id;
  $query1="SELECT * FROM `customertable`";
  $run=mysqli_query($conn,$query1);
  if($run)
  {
    //  echo "success";
  }
  else{
      //echo "no";
  }
  while($data=mysqli_fetch_assoc($run))
  {
      if($id==$data['hid'])
      {
    ?><tr>
       <td><?php echo $data['name']?></td>
      <td><?php echo $data['email']?></td>
      <td><?php echo $data['contact']?></td>
      <td><?php echo $data['country']?></td>
      <td><?php echo $data['city']?></td>
      <td><a class="btn btn-primary" style=" margin-left:2px;padding-left:40px; padding-right:40px">Grant</a></td>
      </tr>
    <?php
  }
}
?>  
</table>






