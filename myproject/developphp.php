<?php
echo"welcome";

include('dbconnection.php');
//mysqli_select_db($conn,'test');
//if($conn)
//echo "success";

?><script>alert("success");</script><?php
extract($_POST);
if(isset($_POST['submit']))
{
    echo "success";
    $query="INSERT INTO `test`( `fname`, `lname`, `email`, `cnum`, `city`, `state`)
     VALUES ('$fname','$lname','$email','$contact','$city','$state')";
     $run=mysqli_query($conn,$query);
     if($run)
     {

    // header('location:develop.php');
     //echo "connection success";
     }
}
else
{
    echo "sorry";
}

?>







<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    


<link rel="stylesheet"  type="text/css"  href="style/bootformcss.php">
    

  <h1 align="center">Customer Form</h1>
<div class="container my-5">
<form action="formsqlinsert.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="hotelname">Hotel Name</label>
      <input type="text" class="form-control is-valid" id="hotelname"  name="hname" placeholder="Enter the name of hotel" >
    </div>
    <div class="form-group col-md-6">
      <label for="contact">CONTACT NUMBER</label>
      <input type="text" class="form-control is-valid" id="contact" name="hcontact" placeholder="Enter hotel contact no">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control is-valid" id="inputEmail" name="hemail" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="hid">UNIQUE ID</label>
      <input type="text" class="form-control is-valid" id="hid" name="hid" placeholder="enter hotel id ">
    </div>
    
    
    
  </div>
  <div class="input-group">
  
  <div class="custom-file col-lg-6 my-3">
    <input type="file" class="custom-file-input" id="inputpic" name="uploadfile" value=""
     aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputpic">hotel picture</label>
  </div>
</div>

      <label for="price">PRICE</label>
      <input type="text" class="form-control is-valid col-md-6 mb-3" id="price" name="price" placeholder="enter price per room ">


  
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="categary">CATEGARY</label>
    <select  class="form-control is-valid ml-0" id="categary" name="category">
      <option value="normal" >NORMAL</option>
      <option value="three_star">THREE STAR</option>
      <option value="four_star">FOUR STAR</option>
      <option value="five_star">FIVE STAR</option>
    </select>
  </div>
  <div class="form-group col-md-6">
      <label for="hroom">CAPACITY</label>
      <input type="text" class="form-control is-valid" id="hroom" name="hroom" placeholder="no of room room">
    </div>
  </div>
  
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control is-valid" id="city" name="city">
    </div>
    <div class="form-group col-lg-6">
      <label for="street">STREET</label>
      <input type="text" class="form-control is-valid" id="street" name="street" placeholder="Enter hotel street name">
    </div>
  </div>
  <div class="form-group col-lg-12">
      <label for="street">GOOGLE MAP</label>
      <input type="text" class="form-control is-valid" id="map" name="map" placeholder="google map link">
    </div>


<!--check box-->


  <div class="row ml-2">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="bathroom" name="attach_bathroom">
    <label class="form-check-label" for="bathroom">Attached Bathroom</label>
  </div>  
  <p style="margin-right:50px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="double_bed" name="double">
    <label class="form-check-label" for="double_bed">Double Bed</label>
  </div>
  </p>
  <p style="margin-right:50px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="single_bed" name="single_bed">
    <label class="form-check-label" for="single_bed">Single Bed</label>
  </div>
  </div>



  <div class="row ml-2">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="tv" name="tv">
    <label class="form-check-label" for="tv">Television</label>
  </div>  
  <p style="margin-right:119px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="ac" name="ac">
    <label class="form-check-label" for="ac">AC</label>
  </div>
  </p>
  <p style="margin-right:114px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="room_service" name="room_service">
    <label class="form-check-label" for="room_service">Room Service</label>
  </div>
  </div>
  <div class="row ml-2">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="wifi" name="wifi">
    <label class="form-check-label" for="wifi">WIFI</label>
  </div>  
  </div>
  
  
<!--- PICTURE  -->

         
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file col-lg-6">
            <input type="file" class="custom-file-input" id="rimg1" name="rimg1" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="rimg1"> picture of room</label>
          </div>
        </div>
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file col-lg-6">
            <input type="file" class="custom-file-input" id="rimg2" name="rimg2" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="rimg2"> picture of room</label>
          </div>
        </div>
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file col-lg-6">
            <input type="file" class="custom-file-input" id="rimg3" name="rimg3" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="rimg3"> picture of room</label>
          </div>
        </div>
  

  
  <button type="submit" class="btn btn-primary">NEXT</button>
  </div>
</form>

</div>