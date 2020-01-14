<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="style/logincss.php">
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="loginsql.php" method="post">
        <div class="logi">
            <h1>login section</h1>
            <img src="pic/7.png" class="logopic">
            
            <p>email</p>
            <input type="text" name="email" placeholder="enter your email">
            <p>password</p>
            <input type="password" name="password" placeholder="enter your password">
            <input  type="submit"    class="btn btn-primary" name="submit" value="login">
            <br>
            <a href="changepassword.php" class="btn btn-danger" style="margin-left:40px; padding-right:60px; border-radious:5px; padding-left:50px">change password</a>
        </div>
        </form>
        
    </body>
</html>