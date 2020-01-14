

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet'  type='text/css' href='style.php'>
<div class="row no-gutters">
<div class="col col-lg-3 no-gutters">
<div class="leftside">


<h3 align="center" style="background-color:blue; color:white; padding:20px;">context</h1>

<div class="formpost">
<form  id="formid" method="post">

<input type="submit" class="btn btn-danger" id="displaybtn" name="displaybtn" value="Facility" style="padding-right:234px; margin-left:10px;margin-top:30px">

<div id="displaydata">

</div>
</form>
<div class="website"id="messagedisplay">
<h2 ></h2>
</div>
</div>
<?php
include('boxfetch.js');
?>

<!-- for price  -->



<div class="formprice">
<form  method="post">

<input type="submit" class="btn btn-danger" id="pricebtn" name="pricebtn" value="Price rate" 
style="padding-right:216px; margin-left:10px;margin-top:10px">

<div id="displayprice">

</div>
</form>
<div class="website"id="messageprice">
<h2 ></h2>
</div>
</div>
<?php
include('priceajax.js');
?>



<!--all city-->


<div class="formprice">
<form  method="post">

<input type="submit" class="btn btn-danger" id="acity" name="acity" value="All city"
 style="padding-right:234px; margin-left:10px;margin-top:10px">

<div id="displaycity">

</div>
</form>
<div class="website"id="citydisplay">
<h2 ></h2>
</div>
</div>
<?php
include('cityajax.js');
?>


<!--sort-->


<div class="formprice">
<form  method="post">

<input type="submit" class="btn btn-danger" id="sort" name="sort" value="sorted by" style="padding-right:215px; margin-left:10px;margin-top:10px">

<div id="displaysort">

</div>
</form>
<div class="website"id="sortdisplay">
<h2 ></h2>
</div>
</div>
<?php
include('sortajax.js');
?>



</div>
</div>
<div class="col col-lg-9 no-gutters">

<div class="rightside"  >




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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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




<h2 style="margin-left:240px">Recommended For You</h2>

<div class="container">
<div class="row" style="margin-left:110px">
<?php 

include('dbconnection.php');
$query="SELECT * FROM `newcustomer`";
$run=mysqli_query($conn,$query);
$n=0;
while($data=mysqli_fetch_assoc($run))
{?>
  <div class="card" style="width: 18rem;">
  <img src="./admin/<?php echo $data['himg'];?>" style="height:200px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data['hname']?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="frontsql.php?id=<?php echo $data['ID']?>" class="btn btn-primary">click</a>
  </div>
</div>

<?php $n++;
}
?>
</div>
</div>








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





</div>


</div>