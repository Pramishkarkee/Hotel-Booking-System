<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    ul{
        background-color:#eee;
        cursor:pointer;
    }
    li{
        padding:12px;
    }
    </style>
    <body>
        <div class="container">
        <input  type="text"  name="search" id= "search" class="form-control "placeholder="Search" aria-label="Search">
      <div id="countrylist">
        
      </div>
    </div>
</body>
<script type="text/javascript">

$(document).ready(function(){
    $('#search').keyup(function(){
        var query = $(this).val();
        if(query !='')
        {
            
            $.ajax({  
                url : "searchsql.php",
                method : "POST",
                data:{query:query},
                success:function(data)
                {
                    $('#countrylist').fadeIn();
                    $('#countrylist').html(data);
                }
            });
        }
        else{
            $('#countrylist').fadeOut();
            $('#countrylist').html("")
        }
    });
    $(document).on('click','li',function(){
    $('#search').val($(this).text());
    $('#countrylist').fadeOut();
    });
});


</script>