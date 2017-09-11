$(document).ready(function(){
  // Abre o cadastrar admin
  $("#btn-admin").click(function(){
      $.ajax({
        url: 'form_cadastrar.php',
        success: function(data){
          $('#div_admin').html(data);
        }
    });
  });
// Fecha o cadastrar admin

// Abre a busca
$("#buscar").keyup(function(){
  if($("#buscar").val().length > 0){
    $.ajax({
        url: 'buscar.php',
        method: 'post',
        data: $('#form_buscar').serialize(),
        success: function(data){
          $("#resultado").html(data);
        }
    });
  }
});
// Fecha a busca




// Abre a função carrega postagem
function carregar_postagem(){
  $.ajax({
    url: "carrega_visualizar.php",
    success: function(data){
      $("#carregar_postagem").html(data);
      // Abre o excluir publicacao
        $(".btn-excluir").click(function(){
          var id = $(this).val();
          var link = "excluir.php?id="+id;
          $.ajax({
            url:link ,
            success: function(data){
              carregar_postagem();
            }
          });

      });
    }
  });
}
carregar_postagem();
// Fecha a função carrega postagem







});
