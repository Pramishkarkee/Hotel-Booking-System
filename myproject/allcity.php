<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<div class="header">dspalay
</div>

<div class="formprice">
<form  method="post">

<input type="submit" class="btn btn-danger" id="acity" name="acity" value="All city" style="padding-right:50px;">

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
