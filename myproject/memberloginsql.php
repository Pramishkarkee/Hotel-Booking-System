<?php
//session_start();
//$_SESSION['email']=$_POST['email'];

// $_SESSION['password']=$_POST['password'];

echo"login successful";
include('dbconnection.php');
$email=$_POST['email'];
$password=$_POST['password'];
//$query="SELECT * FROM `myadmin`";
$query="SELECT *from `myadmin` where `email`='$email' AND `password`='$password'";
$run=mysqli_query($conn,$query);
if($run)
{
    $data=mysqli_fetch_assoc($run);
    $rows=mysqli_num_rows($run);
    if($rows>0)
    {
       // echo "\n session already start";
        session_start();
        $_SESSION['email']=$_POST['email'];
    if(isset($_SESSION['email']))
    {
        
         //$querysel="SELECT * FROM `newcustomer` WHERE `hemail`=$data['email'] `ID`=$data['ID']";
         //$runsel=mysqli_query($conn,$querysel);
         //$datasel=mysqli_fetch_assoc($runsel)
         
           $id=$data['ID'];


         //member platform

         ?>











<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TravelNepal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="memberplatform.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewadmin.php?id=<?php echo $id; ?>">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addroom.php">Add room</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bookhotellist.php?id=<?php echo $id?>">Book Notification</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="chagepass.php">change password</a>
          <a class="dropdown-item" href="lupdate.php">update</a>
          <a class="dropdown-item" href="memberlogout.php">logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<h1 align="center" style="margin-top:40px;color:green;" > Welcome to TravelNepal Platform</h1>
<h2 align="center"style="color:deeppink;">Thanks for being part of TravelNepal</h2>







         





           

        <?php



         //memberplatform end

       // header('location:memberplatform.php');



       // echo "session already start";
        exit();
    }
       // include('memberplatform.php');
    }
    else
    {
        ?>
        <script>
            alert("try again your password is incorrect");
        </script><?php
        
        include('memberlogin.php');
    }
}

?>
<!--<a href="memberlogout.php" > logout</a>-->