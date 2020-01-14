<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>curd</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>
<body>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




<div class="container">
<h1 align="center">lets started</h1>
<div class="d-flex justify-content-end"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button></div>
<div id="records_contant"></div>



<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">update form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
        <label for="hname">hotel name</label>
        <input type="text" class="form-control" id="hname" name="hname">
        </div>
        <div class="form-group">
        <label for="hphone">phone number</label>
        <input type="text" class="form-control" id="hphone" name="hphone">
        </div>
        <div class="form-group">
        <label for="hemail">email</label>
        <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
        <label for="price">price</label>
        <input type="text" class="form-control" id="price" name="price">
        </div>
        
        
        
        
        
         
        
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</div>




<!--update-->








<div class="modal" id="updateModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">update form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
        <label for="updatehname">hotel name</label>
        <input type="text" class="form-control" id="updatehname" name="updatehname">
        </div>
        <div class="form-group">
        <label for="updatehphone">phone number</label>
        <input type="text" class="form-control" id="updatehphone" name="updatehphone">
        </div>
        <div class="form-group">
        <label for="updatehemail">email</label>
        <input type="email" class="form-control" id="updateemail" name="updateemail">
        </div>
        <div class="form-group">
        <label for="updateprice">price</label>
        <input type="text" class="form-control" id="updateprice" name="updateprice">
        </div>
        
        
        
        
        
         
        
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="updateuser()">add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="hidden_id" id="hid_id">
      </div>

    </div>
    </div>
  









<?php

?>
<script type="text/javascript">
//alert("ok");

$(document).ready(function(){
  readRecords();
});

function readRecords(){
  //alert("ok");
   var readrecord = "readrecord";
   
   $.ajax({
          url:"backend1.php",
          type:"post",
          data:{ readrecord:readrecord },
          success:function(data,status){
            
            $('#records_contant').html(data);
            }
   });
}
function addRecord(){
  
    var  hname=$('#hname').val();
    var  hphone=$('#hphone').val() ;
    var  email=$('#email').val() ; 
    var  price=$('#price').val() ; 
    //alert(price);
    $.ajax({
        url :"backend1.php",
        type :'post',
        data :{
          hname:hname,
          hphone :hphone,
          email :email,
          price :price
         },
         success:function(data,status){
              readRecords();  
             // alert('success');
         }
    });
}

//delete record
function DeleteUser(deleteid){
  var conf=confirm("are you sure");
  if(conf==true){
    $.ajax({
      url:"backend1.php",
      type:"post",
      data:{deleteid:deleteid},
      success:function(data,status){
        readRecords();
      }
    });
  }
}
function GetUserDetails(upid){
  
  $('#hid_id').val(upid);
  $.post("backend1.php",{
    upid:upid
  },function(data,status){
  // alert(data);
    var user=JSON.parse(data);
    //alert(upid);
  //  alert(user);
    $('#updatehname').val(user.hname);
    $('#updateemail').val(user.email);
    $('#updatehphone').val(user.contact_no);
    $('#updateprice').val(user.price);
  });
  $('#updateModal').modal("show");
}
function updateuser(uid)
{
var hotelname=$('#updatehname').val();
var email=$('#updateemail').val();
var phone=$('#updatehphone').val();
var price=$('#updateprice').val();

var uidss=$('#hid_id').val();
alert(uidss);
$.post("backend1.php",{
  uidss:uidss,
  hotelname:hotelname,
  email:email,
  phone:phone, 
  price:price,

},
function(data,status){
  $('#updateModal').modal("hide");
  readRecords();
}
);
}
</script>
</body>
</html>