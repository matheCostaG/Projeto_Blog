<?php
  define("HOST", "localhost");
  define("USUARIO", "root");
  define("SENHA", "170s6612");
  define("BANCO","blog");

  $conn = new mysqli(HOST, USUARIO, SENHA, BANCO);
  if($conn->connect_error){
    echo "Erro na conexão com o banco".$conn->connect_error;
  }
  mysqli_set_charset($conn, 'utf8');
 ?>
