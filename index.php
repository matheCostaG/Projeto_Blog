<?php

	require_once "includes/header.php";
	require_once "includes/conexao.php";
	$itens_por_pagina = 9;
	$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 0;
  $result = $conn->query("select p.id, titulo, img_postagem, data, nome, MID(texto,1,250) from admin as a join publicacao as p on a.id = p.id_admin  LIMIT $pagina, $itens_por_pagina ");
	$num_total = $conn->query("SELECT id FROM publicacao")->num_rows;
	$num_paginas = ceil($num_total/$itens_por_pagina);

		while ($row = $result->fetch_assoc()){
    echo "<div class='divcenter'>";
    echo "<ul class='boxposts'  style=' background-size: 100%  auto; background-image: url(imagens/".$row['img_postagem']." );>";
    echo "<li class='list-group-item' >";
    echo "<span class='teste content'>";
    echo "<div class='fundo-titulo'>";
		echo "<span class='datapost'>".$row['data']."</span>";
    echo "<a class='text-center ' href='postagem.php?idpostagem=".$row['id']."'><h1>".$row['titulo']."</h1></a>";
    echo "<div class='abrev_texto text-center texto_valor'>".$row['MID(texto,1,250)']."...</div>";
		echo "<div class='text-center'><a href='postagem.php?idpostagem=".$row['id']."' class='btn-mais'>Ler mais</a></div><br>";
		echo "<span class='datapost'>".$row['nome']."</span>";
    echo "</div>";
    echo "</span>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
	}

$conn->close();
?>
<div class="container">
<nav aria-label="Page navigation example">
  <ul class="pagination">
		<?php
		for ($i=0; $i < $num_paginas; $i++) { ?>
			<li class='page-item'><a class='page-link' href='index.php?pagina=<?php echo $i; ?>'><?php echo $i+1;?></a></li>

		 <?php } ?>
  </ul>
</nav>
</div>
<?php
	require_once "includes/footer.php";
 ?>
