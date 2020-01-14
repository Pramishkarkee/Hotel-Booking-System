
<?php
include('dbconnection.php');
$query="SELECT * FROM `newcustomer`";
$run=mysqli_query($conn,$query);
if($run)
{?>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>travelnepal.com</title> 
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <link rel="stylesheet" a href="css/funds.css"/>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/properjs.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet"  type="text/css"  href="style/frontcss.php">
    <script type="text/javascript">
   function destination(s1,s2)
   {
       var s1=document.getElementById(s1);
       var s2=document.getElementById(s2);
       s2.innerHTML="";
       if(s1.value=="mountain")
       {
           var optionArray=["|","namchabazzar|NAMCHA BAZZER","kathamandu|Kathamandu","jumla|JUMLA","manang|MANANG","mustang|MUSTANG"];
        }
        else if(s1.value=="hilli")
        {
            var optionArray=["|","kathamandu|KATHAMANDU","nagarkot|NAGARKOT","gorkha|GORKHA","pokhara|POKHARA","bhajpur|BHAJPUR","sankhawsava|SANKHAWSAVA","illam|ILLAM",];
        }

        else if(s1.value=="tarai")
        {
            var optionArray=["|","dharan|DHARAN","jhapa|JHAPA","chitwan|CHITWAN","saptakoshi|SAPTAKOSHI","lahan|LAHAN","janakpur|JANAKPUR","rajbiraj|RAJBIRAJ","lumbini|LUMBINI","birgung|BIRGUNG"];
        }
        else
           exit();
        
        //else if(s4.value="")
        for(var option in optionArray)
        {
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption); 
        }
   }
   </script> 
</head>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="pic/10.jpg" class="d-block w-100" alt="..." width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
          <h3>WELCOME TO NEPAL</h3>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/1.jpg" class="d-block w-100" alt="..."width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
        <h3>WELCOME TO NEPAL</h3>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/2.jpg" class="d-block w-100" alt="..."width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
        <h3>WELCOME TO NEPAL</h3>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/3.jpg" class="d-block w-100" alt="..."width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
        <h3>WELCOME TO NEPAL</h3>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/a.jpg" class="d-block w-100" alt="..."width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
        <h3>WELCOME TO NEPAL</h3>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/p.jpg" class="d-block w-100" alt="..."width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
        <h3>WELCOME TO NEPAL</h3>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/6.jpg" class="d-block w-100" alt="..."width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
        <h3>WELCOME TO NEPAL</h3>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/7.jpg" class="d-block w-100" alt="..."width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
        <h3>WELCOME TO NEPAL</h3>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pic/8.jpg" class="d-block w-100" alt="..."width="1148px" height="250px">
        <div class="carousel-caption d-none d-md-block">
          <h5>WELCOME TO NEPAL</h5>
          <p>WWW.TravelNepal.com</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!-- NAVIGATION     -->




<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4" >
<a class="navbar-brand" href="#"><h2>TravelNepal.com</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="abouttravelnepal.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="travelnepal.php">HOTEL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="abouttravelnepal.php">TAXI</a>
      </li>
    </ul>
  </div>
</nav>





<!--    SEARCH SECTION-->

    <form action="frontnext.php" class="form-inline" method='post'>
    <div class="container">
    <h1>Search Your Destination</h1><br>
        <a> REGION</a>
    <select id="region" name="region" onchange="destination(this.id,'place')">
        <option value=""></option>
        <option value="mountain">MOUNTAIN REGION</option>
        <option value="hilli">HILLI REGION</option>
        <option value="tarai">TARAI REGION</option>
    </select>
    <a>PLACE</a>
    <select id="place" name="place" placeholder="- - - ">

    </select>
    <br>
    
    
    <div class="text">
      
    <a>PRICE<a><input type="text" class="form-control col-lg-7" placeholder="enter offortable price" name="price">
    <button class="btn btn-primary">Search</button>
  </div>
  </div>
  </form>      

  <div class="container">
      <div class="row">



      



        <?php 
          $region=$_POST['region'];
          $place=$_POST['place'];
          $price=$_POST['price'];

          while($data=mysqli_fetch_assoc($run))
          {
           if($data['region']==$region&& $data['place']==$place)
           {
               if($data['price']<=($price+200) && $data['price']>=($price-200))
               {
                 //include('fetch.php');
           ?>
            <a href="frontsql.php?id=<?php echo $data['ID']?>" style="text-decoration:none"><div class="card" style="width: 18rem;">
            <img src="./admin/<?php echo $data['himg'];?>" alt="..." class="img-thumbnail">
                
                <div class="card-body">
                
                  <?php //include('fetch.php') ;?>
              
               
                  



              





               
                &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<?php echo "RS ";  echo $data['price'] ?> 
                    <h5 class="card-title"><?php echo $data['hname']?></h5>
                    <p class="card-text">location:<?php echo $data['street'] ?></p>
                    <?php// include(frontsql.php?$id= echo $data['ID']) ?>
                    <a href="frontsql.php?id=<?php echo $data['ID']?>" class="btn btn-primary">CLICK</a>
                </div>
            </div>
               </a>

            <?php
                }
            }
        }
          ?>
      </div>
  </div>    
  
 <?php




}
?>
