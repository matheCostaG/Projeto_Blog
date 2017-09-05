$(document).ready(function(){
  $("#btn-formulario").click(function(){
      $.ajax({
        url: 'inserir.php',
        success: function(data){
          $('#conteudoForm').html(data);
        }
    });
  });
});
