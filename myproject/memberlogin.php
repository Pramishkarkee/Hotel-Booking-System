<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
    session_start();
    if(isset($_SESSION['email']))
    {
       header('location:memberplatform.php');
        //echo "session already start";
       exit();
    }
       
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="memberlogincss.php">
    </head>
    <body>
        <form action="memberloginsql.php" method="post">
        <div class="logi">
            <h1>member login</h1>
            <img src="pic/7.png" class="logopic">
            
            <p>email</p>
            <input type="email" name="email" placeholder="enter your email">
            <p>password</p>
            <input type="password" name="password" placeholder="enter your password">
            <input type="submit" class="btn btn-primary" name="submit" value="login">
            <br>
            <a href="cloginform.php" class="btn btn-danger" style="margin-left:35px; padding-bottom:10px; padding-left:70px;padding-right:70px">create account</a>
        </div>
        </form>
        
    </body>
</html>
