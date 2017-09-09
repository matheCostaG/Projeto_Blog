<?php
	require_once "classes/config.php";
<<<<<<< HEAD



	$conn = new mysqli("localhost", "root", "", "blog");
=======
	require_once "includes/conexao.php";
>>>>>>> bb0a55b300b1a50d7a644fd2742bcff854f80596
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin order by p.id DESC");
  while ($row = $result->fetch_assoc()){
<<<<<<< HEAD
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




=======
  echo "<img src='imagens/".$row['img_postagem']."'>";
  echo $row['nome'];
  echo $row['titulo'];
  echo $row['texto'];
  echo $row['data'];
  }

	?>


	<?php
>>>>>>> bb0a55b300b1a50d7a644fd2742bcff854f80596
	require_once "includes/footer.php";
 ?>