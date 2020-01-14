
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TravelNepal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
    
    </ul>
  </div>
</nav>








<div class="container my-4">
<form id="myform" action="c_hotelinfo.php"  method="post">
  
  
    
    
    <div class="form-row">
    <div class="col-md-4 mb-3 col-lg-6">
      <label for="email" style="margin-left:10px">Email</label>
      <input type="email" class="form-control is-valid" id="email" name="email" value="@gmail.com" placeholder="email" value="" required>
    
    </div>
    <div class="col-md-4 mb-3 col-lg-6">
      <label for="password" style="margin-left:10px">Password</label>
      <input type="password" class="form-control is-valid" id="password" name="password" placeholder="password" value="" required>
     
    </div>
    
    </div>
  <div class="form-row">
  <div class="col-md-3 mb-3 col-lg-6">
      <label for="re_password" style="margin-left:10px">Re-enter Password</label>
      <input type="password" class="form-control is-valid" id="re_password"  name="re_password" placeholder="re-enter password" required>
      
    </div>
  <div class="col-md-4 mb-3 col-lg-6">
      <label for="contact" style="margin-left:10px">Contact Number</label>
      <input type="number" class="form-control is-valid" name="contact" id="contact" placeholder="contact num" value="" required>
    
    </div>
    
</div>
    
    
   


  <button class="btn btn-primary" id="submit" name="submit" type="submit">Submit</button>


</form>
</div>
<script type="text/javascript">
//alert("fine");
$(document).ready(function(){
    //alert("fine");
    var form = $('#myform')
    $('#submit').click(function()
    {
        
        $.ajax({
            url : 'developphp.php',
            type:  'POST',
            data: $("#formid input").serialize(),
            success :function(data)  
            {
                console.log(data);
            }    //'insertphp.php'
        })
    })
})

</script>