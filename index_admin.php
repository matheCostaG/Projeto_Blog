<?php
	require_once "classes/config.php";
	echo "<meta charset='utf-8'>";
	if($_SESSION['nome'] == ""){
		header("Location: index.php");
	}
?>

<div class="margem container">
	<div class="row">
		<div class="col-md-3">
			<div id="div_admin">
			</br><button class="btn btn-outline-primary" id="btn-admin">Adicionar admin</button>
			</div></br>
		<a href="sair.php"><button class="btn btn-outline-danger">Sair</button></a>
		</div>
			<div class="col-md-9">
				<div class="jumbotron">
					<form class="" action="#" method="post">
						<textarea class="border border-dark rounded col-md-12" rows="5" name="postagem" placeholder="Escreva sua Postagem Aqui!"></textarea>
						<button type="submit" class="btn btn-outline-success float-right">Postar</button>
						<input type="file" name="imagem" class="btn btn-outline-primary">
						<input type="date" type="tel" name="data" class="btn btn-link">
					</form>
				</div>
			</div>
	</div>
</div>


<?php

	require_once "includes/footer.php"

?>
