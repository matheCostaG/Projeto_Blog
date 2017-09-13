<?php
	require_once "includes/header.php";
	require_once "includes/conexao.php";
	$idPostagem = $_GET['idpostagem'] ? $_GET['idpostagem'] : 0;
	if($idPostagem == 0){
		header("Location: index.php");
	}
	$result = $conn->query("SELECT * FROM publicacao as p join admin as a WHERE p.id = $idPostagem");
	$row = $result->fetch_assoc();
  ?>

   <div class="img-postagem" style="background-image: url(imagens/<?php echo $row['img_postagem']?>)">
   	<div class="fundo-postagem">
   		<div class="titulo-postagem text-center">
   			<h1><?php echo $row['titulo']?></h1>
   			<div class="meta">
   				<div class="data-postagem">
   					<i class="material-icons md-dark md-inactive">date_range</i>
   					<?php echo $row['data'];?>
   					<strong class="autor-post"><?php echo $row['nome'];?></strong>
   				</div>
   			</div>

   		</div> <!-- tituloPostagem-->

   		<div class="conteudo-postagem">
				<?php echo $row['texto'];?>
   		</div> <!-- Conteudo postagem -->
   	</div>
   </div>
