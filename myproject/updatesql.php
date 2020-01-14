<?php

include('dbconnection.php');
extract($_POST);
if(isset($_POST['readrecord']))
{
    
   $data1='<table class="table table-bordered table-striped">
           <tr>
           <th>No.</th>
           <th>hotelname</th>
           <th>contact no</th>
           <th>email</th>
           <th>price</th>
           <th>edit</th>
           <th>delit</th>
           </tr>';
           $dispquery="SELECT * FROM `curd`";
           $result=mysqli_query($conn,$dispquery);
           if(mysqli_num_rows($result)>0)
           {
               while($data=mysqli_fetch_array($result)){
                   $data1 .='<tr>
                   <td>'.$data['id'].'</td>
                   <td>'.$data['hname'].'</td>
                   <td>'.$data['contact_no'].'</td>
                   <td>'.$data['email'].'</td>
                   <td>'.$data['price'].'</td> 
                   <td><button onclick="GetUserDetails('.$data['id'].')" class="btn  btn-warning">edit</button>
                        </td>

                   <td> <button onclick="DeleteUser('.$data['id'].')" class="btn btn-danger">DELETE</td>
                   </tr> ';
                            
               }
               
           }
           $data1 .='</table>'; 
               echo $data1;
}


if(isset($_POST['hname']) && isset($_POST['hphone'])&& isset($_POST['email'])&&isset($_POST['price']))
{
    $query="INSERT INTO `curd`(`hname`, `email`,`contact_no`,`price`) 
    VALUES ('$hname','$email','$hphone','$price')";
    $run=mysqli_query($conn,$query);
}
//delete

if(isset($_POST['deleteid']))
{
    $uid=$_POST['deleteid'];
    $dquery="delete from curd where id='$uid'";
    $run=mysqli_query($conn,$dquery);

}
if(isset($_POST['upid'])&&isset($_POST['upid'])!='' )
{
    $user_id=$_POST['upid'];
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
   //$user_id=$_GET['upid'];
    $query="SELECT * FROM `curd` WHERE id= '$user_id' ";
    //$reasult=mysqli_query($conn,$query);
    $reasult[]="";
    if($reasult=mysqli_query($conn,$query)){

        while ($row = mysqli_fetch_assoc($reasult)) {
          //  echo $row['id'];
            $response=$row;
          //  echo $row['lastname'];
           // echo $row['address'];
          //  echo $row['age'];
          echo json_encode($response);
          }
    
    }
       
    
   
        
       
         //  
       
    
   
}
else
{
    $response['status']=200;
    $response['message']="invalid request";
}


//update
if(isset($_POST['uidss'])){
    $userid=$_POST['uidss'];  
    $hotelname=$_POST['hotelname'];
  $email=$_POST['email'];
  $phone=$_POST['phone']; 
  $price=$_POST['price']; 
  $query1="UPDATE `curd` SET `hname`='$hotelname',`email`='$email',`contact_no`=$phone,`price`=$price WHERE id='$userid'";
  $run1=mysqli_query($conn,$query1);
}

?>
 