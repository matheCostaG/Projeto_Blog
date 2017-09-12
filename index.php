<?php
	require_once "includes/header.php";
	require_once "includes/conexao.php";


  $result = $conn->query("select p.id, titulo, img_postagem, data, nome, MID(texto,1,250) from admin as a join publicacao as p on a.id = p.id_admin order by p.data DESC");
	$i = 0;
	while ($row = $result->fetch_assoc()){
    echo "<div class='divcenter '>";
    echo "<ul class='boxposts'  style=' background-size: 100%  auto; background-image: url(imagens/".$row['img_postagem']." );>";
    echo "<li class='list-group-item' >";
    echo "<span class='teste content'>";
    echo "<div class='fundo-titulo'>";
		echo "<span class='datapost'>".$row['data']."</span>";
    echo "<a class='text-center ' href='postagem.php'><h1>".$row['titulo']."</h1></a>";
    echo "<div class='abrev_texto text-center texto_valor'>".$row['MID(texto,1,250)']."...</div>";
		echo "<span class='datapost'>".$row['nome']."</span>";
    echo "</div>";
    echo "</span>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";

}
$conn->close();

	require_once "includes/footer.php";
 ?>
