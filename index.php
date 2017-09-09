<?php
	require_once "classes/config.php";
	require_once "includes/conexao.php";
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin order by p.id DESC");
  while ($row = $result->fetch_assoc()){
    echo "<div class='divcenter'>";
    echo "<ul class='boxposts'  style=' background-size: 100%  auto; background-image: url(imagens/".$row['img_postagem']." );>";
    echo "<li class='list-group-item' >";
    echo "<span class='content'>";
    echo "<h1>".$row['titulo']."</h1>";
    echo "<div class='footer_post'>";
    echo "<a href='#'> Leia o Artigo Completo</a>";
    echo "</div>";
    echo "</span>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
}
	require_once "includes/footer.php";
 ?>
