<?php
  require_once "includes/conexao.php";
  $buscar = isset($_POST['buscar']);

    $conn = new mysqli("localhost", "root", "170s6612", "blog");
    if($conn->connect_error){
      echo "Erro na conexão com o banco";
    }
    $result = $conn->query("SELECT titulo FROM publicacao WHERE titulo = '%$buscar%'");
    while ($row = $result->fetch_assoc()){
      echo $row['titulo'];
    }




 ?>
