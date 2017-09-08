$(document).ready(function(){
  $("#btn-admin").click(function(){
      $.ajax({
        url: 'form_cadastrar.php',
        success: function(data){
          $('#div_admin').html(data);
        }
    });
  });

$("#btn-buscar").click(function(){
  if($("#buscar").val().length > 0){
    $.ajax({
      url: 'buscar.php',
      type: 'POST',
      data: $('#buscar_site').serialize(),
      success: function(data){
        $('#resultado').html(data);
      }
    });
  }
});









  function carregar(){
    $.ajax({
      url: 'carregar_postagem.php',
      success: function(data){
        $('#carregar_postagem').html(data);
      }

    });
  }

  carregar();

});
