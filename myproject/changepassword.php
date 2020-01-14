<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<div class="container">
<form action="changesql.php"  method="post" style="margin-top:50px; margin-left:150px ">
  <div class="form-group">
    <label for="uname">username</label>
    <input type="text" class="form-control col-md-6" id="uname" name="uname" placeholder="username">
  </div>
  <div class="form-group">
    <label for="cpassword">password</label>
    <input type="password" class="form-control col-md-6" id="cpassword" name="cpassword" placeholder="enter your current password">
  </div>
  <div class="form-group">
    <label for="changepass">new password</label>
    <input type="password" class="form-control col-md-6" id="changepass" name="changepass" placeholder="enter your password">
  </div>
  <div class="form-group">
    <label for="newpass">re-enter new password</label>
    <input type="password" class="form-control col-md-6" id="newpass" name="newpass" placeholder="enter your new password">
  </div>
    <input type="submit" class="btn btn-primary" value="change">
</form>
</div>