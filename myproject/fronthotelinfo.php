<?php

include('dbconnection.php');
$query="SELECT * FROM `customer`";
$run=mysqli_query($conn,$query);
if($run)
{
    while($data=mysqli_fetch_assoc($run))
    {
        ?><img src="./admin/<?php echo $data['HIMAGE']; ?>" width=200px height=200px align ="left"> 
        <?php
    }
}
?>