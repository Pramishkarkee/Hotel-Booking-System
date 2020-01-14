
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">settings</a>
          <a class="dropdown-item" href="#">update</a>
          <a class="dropdown-item" href="#">logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>









<form id="myform" action="developphp.php"  method="post">
  <div class="container my-4">
  <div class="form-row">
    <div class="col-md-4 mb-3 col-lg-6">
      <label for="fname" style="margin-left:10px">Hotel Name</label>
      <input type="text" class="form-control is-valid" id="fname" name="fname" placeholder="hotel name" value="" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="city" style="margin-left:10px">City</label>
      <input type="text" class="form-control is-valid" id="city" name="city" placeholder="City" required>
      
    </div>
    
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3 col-lg-6">
      <label for="email" style="margin-left:10px">Email</label>
      <input type="email" class="form-control is-valid" id="email" name="email" placeholder="email" value="" required>
    
    </div>
    <div class="col-md-4 mb-3 col-lg-6">
      <label for="lname" style="margin-left:10px">Password</label>
      <input type="text" class="form-control is-valid" id="lname" name="lname" placeholder="password" value="" required>
     
    </div>
    
    </div>
  <div class="form-row">
  <div class="col-md-3 mb-3 col-lg-6">
      <label for="state" style="margin-left:10px">Re-enter Password</label>
      <input type="text" class="form-control is-valid" id="state"  name="state" placeholder="State" required>
      
    </div>
  <div class="col-md-4 mb-3 col-lg-6">
      <label for="contact" style="margin-left:10px">Contact Number</label>
      <input type="text" class="form-control is-valid" name="contact" id="contact" placeholder="contact num" value="" required>
    
    </div>
    
</div>
    
      
   


  <button class="btn btn-primary" id="submit" name="submit" type="submit">Submit</button>
  </div>

</form>

<script type="text/javascript">
//alert("fine");
$(document).ready(function(){
    alert("fine");
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