<?php
<<<<<<< HEAD

	$conn = new mysqli("localhost", "root", "", "blog");
=======
	require_once "includes/conexao.php";
>>>>>>> bb0a55b300b1a50d7a644fd2742bcff854f80596
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin order by p.id DESC");

  while ($row = $result->fetch_assoc()){
  echo "<img src='imagens/".$row['img_postagem']."'>";
  echo $row['nome'];
  echo $row['titulo'];
  echo $row['texto'];
  echo $row['data'];
  }
 ?>
