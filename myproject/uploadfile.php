<!doctype html>
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
<form action="gallarysql.php" method="post" enctype="multipart/form-data">
<!--<input type='file' name="uploadfile" value="upload">
<input type="submit" value="upload"></form>-->
<div class="custom-file col-lg-6 my-3">
    <input type="file" class="custom-file-input" id="inputpic" name="uploadfile" value=""
     aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputpic">hotel picture</label>
  </div>
  <input type="submit" value="upload">
</body>
</html>