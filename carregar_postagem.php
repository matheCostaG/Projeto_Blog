<?php
  $conn = new mysqli("localhost", "root", "170s6612", "blog");
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin");

  while ($row = $result->fetch_assoc()){
  echo "<img src='imagens/".$row['img_postagem']."'>";
  echo $row['nome'];
  echo $row['titulo'];
  echo $row['texto'];
  echo $row['data'];
  }

 ?>
