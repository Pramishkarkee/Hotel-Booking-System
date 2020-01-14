<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>PHP Star Rating System by using Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
   <body>
  <div class="container" style="width:800px;">
   <br />
   <span id="customer_list"></span>
   <br />
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 load_business_data();
 
 function load_business_data()
 {
var data11=<?php echo $id?>;
  $.ajax({
   url:"fetch.php",
   data:{data11:data11},

   method:"POST",
   success:function(data)
   {
    $('#customer_list').html(data);
   }
  });
 }
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var customer_id = $(this).data('customer_id');
  remove_background(customer_id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+customer_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(customer_id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+customer_id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var customer_id = $(this).data('customer_id');
  var rating = $(this).data("rating");
  remove_background(customer_id);
  //alert(rating);
  for(var count = 1; count<=rating; count++)
  {
   $('#'+customer_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var customer_id = $(this).data('customer_id');
  $.ajax({
   url:"insert_rating.php",
   method:"POST",
   data:{index:index, customer_id:customer_id},
   success:function(data)
   {
    if(data)
    {
     load_business_data();
     alert("You have rate "+index +" out of"+5);
    }
    else
    {
     alert("There is some problem in System");
    }
   }
  });
  
 });

});
</script>

   </body>