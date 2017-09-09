<?php
	require_once "classes/config.php";
	require_once "includes/conexao.php";
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin order by p.id DESC");
  while ($row = $result->fetch_assoc()){
  echo "<img src='imagens/".$row['img_postagem']."'>";
  echo $row['nome'];
  echo $row['titulo'];
  echo $row['texto'];
  echo $row['data'];
  }

	?>


	<?php
	require_once "includes/footer.php";
 ?>
