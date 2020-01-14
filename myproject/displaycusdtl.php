<?php
include('dbconnection.php'); 
$query="SELECT * FROM `customer`";
$run=mysqli_query($conn,$query);
if($run)
{
    ?><table align='center' border=1px>
        <tr>
            <td>ID</td>
            <td>HOTEL NAME</td>
            <td>PLACE</td>
            <td>CONTACT NUMBER</td>
            <td>IMAGE</td>
        <?php
    while($data=mysqli_fetch_assoc($run))
    {
        //echo "<pre>";
       // print_r($data);
      ?><tr>
          <td><?php echo $data['ID']?></td>
          <td><?php echo $data['HOTEL_NAME'];?></td>
          <td><?php echo $data['PLACE'];?></td>
          <td><?php echo $data['CONTACT_NUM'];?></td>
          <td> <img src="./admin/<?php echo $data['HIMAGE']; ?>" height="100"; width="100" > 
      <?php
      
    }
    ?>
    </table>
    <?php
    
}
?>