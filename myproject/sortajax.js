<script>

$(document).ready(function(){
    $('#sort').click(function(e){
        
      e.preventDefault();
      $.ajax({
          method:"post",
          url:"sortajax.php",
          data: $('#displaysort').serialize(),
          dataType:"html",
          success:function(response){
              $('#sortdisplay').html(response);
          }
      });
    });
});
</script>