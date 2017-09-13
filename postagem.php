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
				<div class="fb-comments" data-href="https://www.facebook.com/matheusdcg.costagontijo" data-width="500" data-numposts="5"></div>
   		</div> <!-- Conteudo postagem -->

   	</div>
	</div></br>

	 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=225178541343907";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
