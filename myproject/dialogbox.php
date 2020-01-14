<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Open modal for @mdo</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
                  
        
       
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
    
    
    
    
  </div>
  <div class="input-group">
  
  <div class="custom-file col-lg-6 my-3">
    <input type="file" class="form-control is-valid" id="inputpic" name="uploadfile" value=""
     aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputpic">hotel picture</label>
  </div>
</div>
      <hr style="margin-top:50px;">
      <h4><label for="price" style="color:blue; ">Room Rate</label></h4>
      <hr >
      <label for="price">Minimum Rate</label>
      <input type="text" class="form-control is-valid col-md-6 mb-3" id="price" name="minprice" placeholder="enter price per room ">
      <label for="price">Maxmium Rate</label>
      <input type="text" class="form-control is-valid col-md-6 mb-3" id="price" name="maxprice" placeholder="enter price per room ">
      <hr style="margin-bottom:50px; margin-top:40px;">


  
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
  <hr>
  <label for="place">place</label>
      <input type="text" class="form-control is-valid col-md-6" id="place" name="place">
      <label for="inputCity">City</label>
      <input type="text" class="form-control is-valid col-md-6" id="city" name="city">
    
    
      <label for="street">STREET</label>
      <input type="text" class="form-control is-valid col-md-6" id="street" name="street" placeholder="Enter hotel street name">
  </div>

<!--check box-->
   
  <div class="container">
  <h3><label for="bathroom">Available Facility</label></h3>
  <hr>
  <div class="row ml-2 ">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="bathroom" name="attach_bathroom">
    <label class="form-check-label" for="bathroom">Attached Bathroom</label>
  </div>  
  <p style="margin-right:110px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="double_bed" name="double">
    <label class="form-check-label" for="double_bed">Double Bed</label>
  </div>
  </p>
  <p style="margin-right:110px;">
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
  <p style="margin-right:178px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="ac" name="ac">
    <label class="form-check-label" for="ac">AC</label>
  </div>
  </p>
  <p style="margin-right:175px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="room_service" name="room_service">
    <label class="form-check-label" for="room_service">Room Service</label>
  </div>
  </p>
  </div>
  <div class="row ml-2">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="wifi" name="wifi">
    <label class="form-check-label" for="wifi">WIFI</label>
  </div>  
  <p style="margin-right:214px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="heater" name="heater">
    <label class="form-check-label" for="heater">Heater</label>
  </div>
  </p>
  <p style="margin-right:149px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="bath_top" name="bath_top" name="room_service">
    <label class="form-check-label" for="bath_top">Bath top</label>
  </div>
  </p>
  </div>
  


  <div class="row ml-2">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="parking" name="parking">
    <label class="form-check-label" for="parking">Parking facility</label>
  </div>  
  <p style="margin-right:144px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="bar" name="bar">
    <label class="form-check-label" for="bar">Bar</label>
  </div>
  </p>
  <p style="margin-right:170px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="massage" name="massage">
    <label class="form-check-label" for="massage">Massage</label>
  </div>
  </p>
  </div>



  <div class="row ml-2">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="elevator" name="elevator">
    <label class="form-check-label" for="elevator">Elevator</label>
  </div>  
  <p style="margin-right:190px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="conference" name="conference">
    <label class="form-check-label" for="conference">Conference Room</label>
  </div>
  </p>
  <p style="margin-right:66px;">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="banqueat" name="banqueat">
    <label class="form-check-label" for="banqueat">Banqueat hall</label>
  </div>
  </p>
  </div>
  <hr style="margin-bottom:50px;">
  
  
<!--- PICTURE  -->

         
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file col-lg-6">
            <input type="file" class="custom-file-input is-valid" id="rimg1" name="rimg1" aria-describedby="inputGroupFileAddon01" require>
            <label class="custom-file-label" for="rimg1">Bed Room</label>
          </div>
        </div>
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file col-lg-6">
            <input type="file" class="custom-file-input is-valid" id="rimg2" name="rimg2" aria-describedby="inputGroupFileAddon01" require>
            <label class="custom-file-label" for="rimg2">Rest Room</label>
          </div>
        </div>
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file col-lg-6">
            <input type="file" class="custom-file-input is-valid" id="rimg3" name="rimg3" aria-describedby="inputGroupFileAddon01" require>
            <label class="custom-file-label" for="rimg3">Kitchen</label>
          </div>
        </div>
  

  
  <button type="submit" class="btn btn-primary" style="margin-bottom:70px;margin-top:30px;">NEXT</button>
  <br>
  <br>
  <br>
  </div>
  </div>




        </form>
      </div>
      <button type="button" class="btn btn-secondary mx-4" data-dismiss="modal">login</button>
        <button type="button" class="btn btn-secondary mx-4 my-2" data-dismiss="modal">login from google</button>
        <button type="button" class="btn btn-primary mx-4 my-2">create account</button>
      
    </div>
  </div>
</div>