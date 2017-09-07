$(document).ready(function(){
  $("#btn-admin").click(function(){
      $.ajax({
        url: 'form_cadastrar.php',
        success: function(data){
          $('#div_admin').html(data);
        }
    });
  });
});
