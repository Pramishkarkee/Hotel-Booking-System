<link rel="stylesheet" a href="css/bootstrap.css"/>
    <link rel="stylesheet" a href="css/funds.css"/>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/properjs.js"></script>
    <script src="js/bootstrap.js"></script>

<div class="col-lg-8 m-auto">
    <form id="myform" action="insert.php" method="post">
        <div class="form-group">
            <label>username</label>
            <input type="text" name="uname" class="form-control">
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" class='form-control' name="password">
        </div>
        <input type='submit' value="submit" id="submit" class='btn btn-success'>
        <script type="text/javascript">
        $(document).ready( function(){
            var=form('#myform');
            $('#submit').click(function(){
              $.ajax({
                  url=insert.php,
                  type='post'
                data:$('#myform input').serialize(),
              });
            });
        });
        </script>

</div>
