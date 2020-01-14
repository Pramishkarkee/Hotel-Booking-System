<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<table border="1px" align="center">
<tr>

<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">list</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">value</th>
<th style="padding-left:40px;padding-right:40px; padding-top:10px; padding-bottom:10px;">update</th>

</tr>
<?php 
$id=$_GET['id'];
include('dbconnection.php');
$query="select *from `newcustomer`";
$run=mysqli_query($conn,$query);
while($data=mysqli_fetch_assoc($run))
{
    if($id==$data['ID'])
    {
        ?>
        
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Hotel Name</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['hname'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
    
        </tr>

         <!--contact number-->

        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Contact Number</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['hcontact'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
    
        </tr>
         <!--category-->

         <tr>
        <td style="padding-left:40px;padding-right:40px; ">Category</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['category'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>

        <!--rooom-->

        <tr>
        <td style="padding-left:40px;padding-right:40px; ">No of Room</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['hroom'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
    
        </tr>
        
        <!--city-->
        
        
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">City</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['city'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
    
        </tr>


        <tr>
        <td style="padding-left:40px;padding-right:40px; ">street</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['street'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        
        <!--email-->
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Email</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['hemail'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <!--checkbox-->
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">bathroom</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['bathroom'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Double Bed</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['double_bed'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Single Bed</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['single_bed'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">AC</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['ac'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Room Service</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['room_service'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">WIFI</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['wifi'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Heater</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['heater'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Bath Tob</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['bath_top'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>

        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Parking</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['parking'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Bar</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['bar'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Massage</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['massage'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Elevator</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['elevator'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
    
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Conference</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['conference'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <tr>
        <td style="padding-left:40px;padding-right:40px; ">Banqueat</td>
        <td style="padding-left:40px;padding-right:40px; "><?php echo $data['banqueat'];?></td>
        <td><a href="updateadmin.php" class="btn btn-primary"style=" margin-left:2px;padding-left:40px; padding-right:40px">update</a></td>
        
        </tr>
        <?php
    }
}
?>
</table>