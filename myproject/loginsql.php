<?php
//echo"login successful";
include('dbconnection.php');
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
//$query="SELECT * FROM `myadmin`";
$query="SELECT *from `adminauthority` where `username`='$email' AND `adpass`='$password' ";
$run=mysqli_query($conn,$query);
if($run)
{
    $data=mysqli_fetch_assoc($run);
    $rows=mysqli_num_rows($run);
    if($rows>0)
    {
        include('adminview.php');
    }
    else
    {
        ?>
        <script>
            alert("try again your password is incorrect");
        </script><?php
        
        include('loginhtml.php');
    }
}
else{
    echo "sorry";
}

?>