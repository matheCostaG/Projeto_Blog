<?php
  require_once "classes/config.php";
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = isset($_POST['login']) ? $_POST['login'] : null;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

    if($login != null && $senha != null){
      $senhaAdm = md5($senha);
      Usuario::entrar($login, $senhaAdm);
    }else{
      header("Location: admin.php");
    }
  }else {
    header("Location: index.php");
  }
 ?>
