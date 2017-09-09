<?php
require_once "classes/config.php";
  if($_SERVER["REQUEST_METHOD"] == 'POST'){
     $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
     $email = isset($_POST['email']) ? $_POST['email'] : null;
     $login = isset($_POST['login']) ? $_POST['login'] : null;
     $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

     if($nome!= null && $email != null && $login != null && $senha != null){
          $usuario = new Usuario($nome, $email, $login, $senha);
          $usuario->cadastrarAdmin();
     }else{
       header("Location: index_admin.php");
     }
 }else{
   header("Location: index.php");
 }
 ?>
