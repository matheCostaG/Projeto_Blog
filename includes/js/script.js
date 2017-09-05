$(document).ready(function(){
  $("#btn-formulario").click(function(){
    //$("#formulario").css({"display": "none"});
      $.ajax({
        url: 'inserir.php',
        success: function(data){
          $('#conteudoForm').html(data);
        }
    });
  });
});
