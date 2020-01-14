


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php include('dbconnection.php');
$search=$_POST['search'];
//echo $hname;
if(isset($_POST['search_btn']))
{
    $search=mysqli_real_escape_string($conn,$_POST['search']);
    $sql ="SELECT *FROM newcustomer WHERE city LIKE '%$search%' OR street LIKE '%$search%' OR hname LIKE '%$search%'";
    $reasult=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($reasult);
    if($row>0)
    {




        ?>

        <style>
        .display ul{
             background-color:#eee;
             cursor:pointer;
             margin-right:510px;
         }
        .display li{
             padding:12px;
         }
     </style>
     
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href=" ">TravelNepal</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarText">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="ajax.php">Features</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Pricing</a>
           </li>
         </ul>
         <span class="navbar-text">
         <a class="nav-link" href="memberlogin.php">Member login</a>
         </span>
       </div>
     </nav>
     
     
     
     
     <form action="searchphp.php" method="post">
       <div class="row"   style="margin-left:320px;">
         <div class="col" >
           <input type="text" class="form-control ml-4 mt-4"  name="search" id= "search" placeholder="search hotel,place">
         </div>
         <div class="col">
         <button type="submit" class="btn btn-primary  mt-4" id="search_btn" name="search_btn" >search</button>
         </div>
       </div>
       <div class="display" id="countrylist" style="margin-left:360px;">
             
           </div>
     </form>
     
     
     





      

      
        <h2 style="margin-left:240px">Recomendent for you</h2>
<hr>
<div class="container">
<div class="row" style="margin-left:110px">
<?php 


while($data=mysqli_fetch_assoc($reasult))
{
  ?>
  <a href="frontsql.php?id=<?php echo $data['ID']?>">
  <div class="card m-1" style="width: 18rem;">
  <img src="./admin/<?php echo $data['himg'];?>" style="height:200px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data['hname'];?><b style="margin-right:50px;"> <?php echo $data['min_rate'];?></b></h5>

    <p class="card-text">City:<?php echo $data['city']?></p>
    <a href="frontsql.php?id=<?php echo $data['ID']?>" class="btn btn-primary">Hotel Information</a>
  </div>
</div>
</a>

<?php ;
}
?>
</div>
</div>


<?php

    }
    else
    {
        echo"not find";
    }
}

?>
<script type="text/javascript">

$(document).ready(function(){
    $('#search').keyup(function(){
        var query = $(this).val();
        if(query !='')
        {
            
            $.ajax({  
                url : "searchtestsql.php",
                method : "POST",
                data:{query:query},
                success:function(data)
                {
                    $('#countrylist').fadeIn();
                    $('#countrylist').html(data);
                }
            });
        }
        else{
            $('#countrylist').fadeOut();
            $('#countrylist').html("")
        }
    });
    $(document).on('click','li',function(){
    $('#search').val($(this).text());
    $('#countrylist').fadeOut();
    });
});


</script>