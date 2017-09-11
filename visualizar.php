<?php
  require_once "includes/config.php";
  require_once "includes/conexao.php";
	if($_SESSION['id'] == ""){
		header("Location: index.php");
	}
?>

  <div class="container">
  </br><div class=" margem widget widget-table action-table">
        <div class="widget-header"> <a href="index_admin.php"><i class="material-icons">list</i></a></div>
            <div id="carregar_postagem"></div>
         </div>
    </div>

<?php
  require_once "includes/footer.php";
 ?>
