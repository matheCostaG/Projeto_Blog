<?php
	require_once "classes/config.php";
	require_once "includes/conexao.php";
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin order by p.id DESC");
  while ($row = $result->fetch_assoc()){
    echo "<div class='divcenter'>";
<<<<<<< HEAD
    echo "<ul class='boxposts '  style=' background-size: 100%  auto; background-image: url(imagens/".$row['img_postagem']." );>";
    echo "<li>";
=======
    echo "<ul class='boxposts'>";
    echo "<li class='list-group-item' >";
    echo "<span class='thumb'>";
    echo "<img src='imagens/".$row['img_postagem']."' alt='' title='' width='166' height='166'>";
    echo "</span>";
>>>>>>> 37a25e834e802631fc82adbc3c0594c3c6a19476
    echo "<span class='content'>";
    echo "<h1>".$row['titulo']."</h1>";
    echo "<div class='footer_post'>";
<<<<<<< HEAD
    echo "<a href='#'> Leia o Artigo Completo </a>";            
    echo "<span class'datapost'> Data de Publicação: <strong>".$row['data']."</strong></span>";
=======
    echo "<a href='#'> Leia o Artigo Completo</a>";
    echo "<span class'datapost float-right'>Data de Publicação: <strong>".$row['data']."</strong></span>";
>>>>>>> 37a25e834e802631fc82adbc3c0594c3c6a19476
    echo "</div>";
    echo "</span>";
    echo "</li>";
    echo "</ul>";
    echo "</div>";
<<<<<<< HEAD
  
=======

>>>>>>> 37a25e834e802631fc82adbc3c0594c3c6a19476
}

	?>
	<?php
	require_once "includes/footer.php";
 ?>
