<?php
  define("HOST", "localhost");
  define("USUARIO", "root");
<<<<<<< HEAD
  define("SENHA", "");
=======
  define("SENHA", "seemg");
>>>>>>> 8a4c5fd3eab42949dc52e7e5ce78407bcdbcc3fe
  define("BANCO","blog");

  $conn = new mysqli(HOST, USUARIO, SENHA, BANCO);
  if($conn->connect_error){
    echo "Erro na conexão com o banco".$conn->connect_error;
  }
  mysqli_set_charset($conn, 'utf8');
 ?>
