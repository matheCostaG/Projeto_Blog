<?php
require_once "classes/config.php";
session_start();
if($_SESSION['id'] == ""){
  header("Location: index.php");
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $id = isset($_POST['id']) ? $_POST['id'] : null;
  $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
  $texto = isset($_POST['texto']) ? $_POST['texto'] : null;
  $data = isset($_POST['data']) ? $_POST['data'] : null;
    if($id != null && $titulo != null && $texto != null && $data != null){
      if($imagem = $_FILES['imagem_postagem']){
        if($imagem['error']){
          Usuario::editarPostagem($titulo, $texto, $data, $id, $imagem);
          
        }else{
          $pasta = "imagens";
          $fileImagem = $id.".jpg";
          $file = $pasta.DIRECTORY_SEPARATOR.$fileImagem;
          if(file_exists("$file")){
            unlink("$file");
          }
          Usuario::editarPostagem($titulo, $texto, $data, $id, $imagem);
        }
      }
     }else {
      header("Location: index_admin.php");
  }
}

 ?>
