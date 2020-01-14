<?php
  
  error_reporting(0);
  include('dbconnection.php');
  $hid=$_REQUEST['id'];
  $name=$_POST['name'];
  $cemail=$_POST['email'];
  $contact=$_POST['contact'];
  $country=$_POST['country'];
  $city=$_POST['city'];
  $bank=$_POST['bank'];
  $hotel=$_POST['hotel'];
  if(isset($bank)=="" && isset($hotel)=="")
  { 
    ?><script>
    alert("please select your payment");
    </script><?php
      include('book.php');
  }
  if($hotel=='on')
  {
      $bank='hotel';
  }
  else
  {
      $hotel='bank';
  }

  $query="SELECT * FROM `newcustomer`";
   

  $run=mysqli_query($conn,$query);
  if($run)
  {
      while($data=mysqli_fetch_assoc($run))
      {
          $hroom=$data['hroom'];
          if($hid==$data['ID'])
          {  
              if($hroom>0)
              {
              $hname=$data['hname'];
              $hemail=$data['hemail'];
              
              $query2="INSERT INTO `customertable`(`email`, `contact`, `country`, `city`, `dr_cr`, `hpay`, `hid`, `hname`, 
              `hemail`, `name`) 
              VALUES ('$cemail','$contact','$country','$city','$bank','$hotel','$hid','$hname','$hemail','$name')";
              $run=mysqli_query($conn,$query2);
              
              $hroom=$hroom-1;
              
              //echo "room=".$hroom;
              $update="UPDATE `newcustomer` SET `hroom`='$hroom' WHERE `ID`='$hid'";
              $runup=mysqli_query($conn,$update);
              if($runup)
              {
                  //echo "success";
              }
              else{
                  //echo "no";
              }
              if($run)
              {
                  ?><script>
                  alert("thank you!!!");</script><?php
                  include('index.php');
              }
            }
            else{
                ?><script>
                alert("sorry their was no any room available try another hotel!!!");</script><?php
                 include('index.php');
            }
          }
      }
  }
  ?>