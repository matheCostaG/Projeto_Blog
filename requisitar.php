<?php
require_once 'classes/Solicitar.php';
if($_SERVER["REQUEST_METHOD"] == 'POST'){
   $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
   $email = isset($_POST['email']) ? $_POST['email'] : null;
   $login = isset($_POST['login']) ? $_POST['login'] : null;
   $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

   if($nome!= null && $email != null && $login != null && $senha != null){
        $usuario = new Solicitar($nome, $email, $login, $senha);
        $usuario->solicitarAdmin();
   }else{
     header("Location: index.php");
   }

 }

 ?>
