<script>

$(document).ready(function(){
    $('#acity').click(function(e){
        
      e.preventDefault();
      $.ajax({
          method:"post",
          url:"cityajax.php",
          data: $('#displaycity').serialize(),
          dataType:"html",
          success:function(response){
              $('#citydisplay').html(response);
          }
      });
    });
});
</script>