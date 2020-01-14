<script>

$(document).ready(function(){
    $('#displaybtn').click(function(e){
        
      e.preventDefault();
      $.ajax({
          method:"post",
          url:"fetchbox.php",
          data: $('#displaydata').serialize(),
          dataType:"html",
          success:function(response){
              $('#messagedisplay').html(response);
          }
      });
    });
});



</script>