<script>

$(document).ready(function(){
    $('#pricebtn').click(function(e){
        
      e.preventDefault();
      $.ajax({
          method:"post",
          url:"fetchprice.php",
          data: $('#displayprice').serialize(),
          dataType:"html",
          success:function(response){
              $('#messageprice').html(response);
          }
      });
    });
});
</script>