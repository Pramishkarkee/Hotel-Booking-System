<!DOCTYPE html>
<html>
<head>
    <title>google </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="google-signin-client_id" 
    content="620951029748-v6mon2j4ile1ar53etehqcuolesta2vo.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer>
    
     </script>
     <style>
          
          .data{
              display:none;
          }
          </style>
     <script src="scriptmap.js"></script>
     <link rel="stylesheet" type="text/css" href="style/logincss.php">
</head>
<body>
<form action="formhtml.php" method="post">
        <div class="logi">
            <h1>login section</h1>
            <img src="pic/7.png" class="logopic">
            
            <p>email</p>
            <input type="email" name="email" placeholder="enter your email">
            <p>password</p>
            
            <input type="password" name="password" placeholder="enter your password">
            <input type="submit" name="submit" value="login">
            <div class="g-signin2" data-onsuccess="onSignIn" style="margin-left:50px ;padding-left:20;"></div>            
        </div>
        </form>
     <div class="data">
     <p>Profile Detail</p>
     <img id="pic" class="img-circle" width="100" height="100"/>
     <p>email address</p>
     <p id="email" class="alert alert-danger"></p>
     <button onclick=signout() class="btn btn-danger">sign out </button>
     </div>
</body>
</html>







        