<?php
  require_once "includes/conexao.php";
  $buscar = isset($_POST['buscar']) ? $_POST['buscar'] : null;
  if($buscar != null){
    $result = $conn->query("SELECT titulo FROM publicacao WHERE titulo LIKE '%$buscar%' LIMIT 1");
    while($row = $result->fetch_assoc()){
      echo "<li class='list-group-item'><a href='#'i>".$row['titulo']."</a></li>";
    }
  }else {
    header("Location: index.php");
  }

 ?>
