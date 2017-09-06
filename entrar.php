<?php
  require_once "includes/header.php";
  require_once "classes/Usuario.php";

  $login = isset($_POST['login']) ? $_POST['login'] : null;
  $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
  if($login != null && $senha != null){
    $senhaAdm = md5($senha);
    Usuario::entrar($login, $senhaAdm);
  }else{
    header("Location: admin.php");
  }
  require_once "includes/footer.php";

 ?>
