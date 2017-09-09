<?php
	require_once "classes/config.php";
	require_once "includes/conexao.php";
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin order by p.id DESC");
  while ($row = $result->fetch_assoc()){
    echo "<div class='divcenter'>";
    echo "<ul class='boxposts'>";
    echo "<li class='list-group-item' >";
    echo "<span class='thumb'>";
    echo "<img src='imagens/".$row['img_postagem']."' alt='' title='' width='166' height='166'>";
    echo "</span>";
    echo "<span class='content'>";
    echo "<h1>".$row['titulo']."</h1>";
    echo "<p>".$row['texto']."</p>";
    echo "<div class='footer_post'>";
    echo "<a href='#'> Leia o Artigo Completo</a>";
    echo "<span class'datapost float-right'>Data de Publicação: <strong>".$row['data']."</strong></span>";
    echo "</div>";
    echo "</span>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";

}

	?>
	<?php
	require_once "includes/footer.php";
 ?>
