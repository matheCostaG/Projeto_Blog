<?php
	require_once "includes/header.php";
	require_once "includes/conexao.php";
?>

  <?php
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin order by p.data DESC");

  while ($row = $result->fetch_assoc()){

    echo "<div class='divcenter'>";
    echo "<ul class='boxposts'  style=' background-size: 100%  auto; background-image: url(imagens/".$row['img_postagem']." );>";
    echo "<li class='list-group-item' >";
    echo "<span class='content'>";
    echo "<div class='fundo-titulo'>";
    echo "<a href='postagem.php'><h1>".$row['titulo']."</h1></a>";
    
    echo "<div class='footer_post'>";
    
    echo "<strong>".$row['nome']."</strong>";
    echo "<span class='datapost'>Data de Publicação: <strong>".$row['data']."</strong></span>";
    echo "</div>";
    echo "</div>";
    echo "</span>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
}

$conn->close();

	?>

	<?php
	require_once "includes/footer.php";
 ?>
