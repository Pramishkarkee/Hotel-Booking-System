<?php
function showdata()
{
$conn=mysqli_connect('localhost','root','','infocustumer');
$query="SELECT * FROM `logininfor`";
$run=mysqli_query($conn,$query);

if($run)
{
?>
<table border='1' width=50% aligen="center" >
    <tr>
        <td>name</td>
        <td>address</td>
        <td>contact number<td>
</tr>       
<?php
   while($data=mysqli_fetch_assoc($run))
   {
      ?>
      <tr>
      <td><?php echo $data['name']?></td><td><?php echo $data['address']?></td><td><?php echo $data['phonenumber']?></td>
   </tr>
      <?php

   }

?>
</table>
    <?php
    }
else
  print "error";
}
?>
<pre>
<html>
    <head></head>
    <body>
        <?php showdata(); ?>
    </body>
    </html>
</pre>