<?php
$id=$_GET['id'];
echo $id;
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bootstrap learn</title> 
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <link rel="stylesheet" a href="css/funds.css"/>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/properjs.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<form action="bookphp.php?id=<?php echo $id?>" method="post">
    <div class="container mt-4">
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="enter your name">
  </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    
  </div>
  <label for="contact">contact no.</label>
  <input type="text" class="form-control col-md-6" id="contact" name="contact" placeholder="enter your contact no">
  <div class="row">
  <div class="form-group col-md-6">
    <label for="country">country</label>
    <input type="text" class="form-control" id="country" name="country" placeholder="enter your country name">
  </div>
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city" placeholder="enter your city name">
    </div>
</div>
<hr>
<label for="bank">debit/credit card no.</label>
<input type="text" class="form-control col-md-6 mb-4" id="bank" name="bank" placeholder="enter your cradit card no">   
<hr>
<div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="hotel" name="hotel">
      <label class="form-check-label" for="hotel">
        Pay in hotel
      </label>
    </div>
  </div>
  <input type="submit" value="submit" class="btn btn-primary">

  
  </div>
</form>
</body>
</html>