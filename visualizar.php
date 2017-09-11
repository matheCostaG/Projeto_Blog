<?php
  require_once "classes/config.php";
  require_once "includes/conexao.php";
	if($_SESSION['id'] == ""){
		header("Location: index.php");
	}
?>

  <div class="container">
  </br><div class=" margem widget widget-table action-table">
        <div class="widget-header"> <i class="material-icons">list</i></div>
            <div id="carregar_postagem"></div>
         </div>
    </div>

<?php
  require_once "includes/footer.php";
 ?>
