<?php
  require_once "includes/conexao.php";
  session_start();
	if($_SESSION['id'] != "" && $id = $_GET['id']){
    if($conn->query("DELETE FROM publicacao WHERE id = $id")){
      $pasta = "imagens";
      $imagem = $id.".jpg";
      $file = $pasta.DIRECTORY_SEPARATOR.$imagem;
      if(file_exists("$file")){
        unlink("$file");
      }
      $conn->close();
    }
  }else{
    header("Location: index.php");
  }
 ?>
