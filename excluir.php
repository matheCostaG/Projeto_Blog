<?php
  require_once "includes/conexao.php";
	if($_SESSION['id'] == ""){
		header("Location: index.php");
	}
  $id = $_GET['id'];
    if($conn->query("DELETE FROM publicacao WHERE id = $id")){
      echo "Deletado com sucesso";
    }
 ?>
