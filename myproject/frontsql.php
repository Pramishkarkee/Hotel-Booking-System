


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet'  type='text/css' href='style.php'>
<?php
  $id=$_GET['id'];  
  include('dbconnection.php');
  $query="SELECT * FROM `newcustomer` WHERE ID='$id' ";
  //$query1="SELECT round(avg(rating)) as averagerating FROM `rating` WHERE customer_id='$id' ";
  //$run1=mysqli_query($conn,$query1);
  //if($run1)
  //{
  //$rating=mysqli_fetch_assoc($run1);
  //}
  
  $run=mysqli_query($conn,$query);
  if($run)
  {

    $data=mysqli_fetch_assoc($run)
    
      ?>
      <?php //include('fetch.php');?>
      <link rel="stylesheet" a href="css/bootstrap.css"/>
    <link rel="stylesheet" a href="css/funds.css"/>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/properjs.js"></script>
    <script src="js/bootstrap.js"></script>
      <div class="container mt-4">
       


      
      <div class="row no-gutters">
     <div class="col col-lg-3 no-gutters">
     <div class="leftside">
      <a href="./admin/<?php echo $data['himg']; ?>" target="_blank">
      <img src="./admin/<?php echo $data['himg']; ?>"  width=600px height=300px align ="left">
      </a>
      <a href="./admin/<?php echo $data['left_view']; ?>" target="_blank">
      <img src="./admin/<?php echo $data['left_view']; ?>" width=600px height=300px align ="left">
      </a>
      <a href="./admin/<?php echo $data['right_view']; ?>" target="_blank">
      <img src="./admin/<?php echo $data['right_view']; ?>"  width=600px height=300px align ="left">
      </a>
      <a href="./admin/<?php echo $data['washroom_view']; ?>" target="_blank">
      <img src="./admin/<?php echo $data['washroom_view']; ?>"  width=600px height=300px align ="left">
      </a>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
       </div>
       </div>
       </div>
       
       <div class="row no-gutters">
     <div class="col col-lg-6 no-gutters">
     <div class="rightside">
      <h5><p><b style="font-family:Times New Roman; color:blue;">Hotel Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<?php echo $data['hname']; ?></p>
      <p>Contact Number&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<?php echo $data['hcontact']; ?></p>
      
     
      <p>city&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<?php echo $data['city']?></p>
      <p>street&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<?php echo $data['street']?></p>
      <p>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<?php echo $data['hemail']?></p></h5>
      <?php
         $dat=$data['hroom'];
         $i=1;
         while($dat>0)
         {
          
         ?> <img src="image/dbed.jpg"  width=30px height=30px ><?php
              echo "room no".$i;
              $i=$i+1;
              $dat=$dat-1;
         }
?>
         <p><h3 style="color:green">Facility</h3></p>
         <hr>
         <?php
         if($data['bathroom']=='on')
                {
                 ?><li ><?php echo "Attach Bathroom\n";?>        <img src="./image/btr.png"  width=600px height=300px > </li><?php
                }
                if($data['tv']=='on')
                {
                 ?><li><?php echo "TV\n";?> <img src="image/tv1.jpg"  width=30px height=30px ></li><?php
                }
                if($data['ac']=='on')
                {
                  ?><li><?php echo "AC\n";?> <img src="image/ac.png"  width=30px height=30px ></li><?php
                }
                if($data['room_service']=='on')
                {
                  ?><li><?php echo "Room Service\n";?><img src="image/rs.jpg"  width=30px height=30px /></li><?php
                }
                if($data['wifi']=='on')
                {
                  ?><li><?php echo "WIFI\n";?><img src="image/wifi.png"  width=30px height=30px /></li><?php
                }
                if($data['heater']=='on')
                {
                  ?><li><?php echo "Heater\n";?></li><?php
                }
                if($data['bath_top']=='on')
                {
                  ?><li><?php echo "Bath Tob\n";?></li><?php
                }
                if($data['parking']=='on')
                {
                  ?><li><?php echo "Parking\n";?></li><?php
                }
                if($data['bar']=='on')
                {
                  ?><li><?php echo "Bar\n";?></li><?php
                }
                if($data['massage']=='on')
                {
                  ?><li><?php echo "Massage\n";?></li><?php
                }?>

      <a style="margin-buttom:100px;"href="book.php?id=<?php echo $data['ID']?>" class="btn btn-primary">book</a>
       
      





    






</div>
</div>
</div>
  </div>

  
      <!--rating-->




      

    
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <div class="container" style="width:800px;">
   <br />
   <span id="customer_list"></span>
   <br/>
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
   url:"insert_rating.php?cid=$id",
   method:"GET",
   data:{index:index, customer_id:customer_id},
   success:function(data)
   {
    if(data)
    {
     load_business_data();
     alert("You have rate "+index +" out of"+customer_id);
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

   
         <?php
    
  }
  else{
    echo"sorry";
  }
?>

