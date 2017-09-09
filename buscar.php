<?php
  require_once "includes/conexao.php";
  $buscar = isset($_POST['buscar']) ? $_POST['buscar'] : null;
  if($buscar != null){
    $result = $conn->query("SELECT titulo FROM publicacao WHERE titulo LIKE '%$buscar%'");
    while($row = $result->fetch_assoc()){
      echo $row['titulo'];
    }
  }

 ?>
