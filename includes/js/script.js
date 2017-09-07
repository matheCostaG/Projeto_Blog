$(document).ready(function(){
  $("#btn-admin").click(function(){
      $.ajax({
        url: 'form_cadastrar.php',
        success: function(data){
          $('#div_admin').html(data);
        }
    });
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
