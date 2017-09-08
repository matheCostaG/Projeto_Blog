<?php
	require_once "classes/config.php";
	if($_SESSION['id'] == ""){
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
				<div class="jumbotron" >
					<form method="post" enctype="multipart/form-data">
						<textarea class="border border-dark rounded col-md-12" rows="1" name="titulo" placeholder="Titulo da Postagem!"></textarea>
						<textarea class="border border-dark rounded col-md-12" rows="5" name="texto" placeholder="Escreva sua Postagem Aqui!"></textarea>
						<input type="file" name="imagem_postagem" class="btn btn-outline-primary">
						<input type="date" type="tel" name="data" class="btn btn-link">
						<button type="submit" id="btn-postar" class="btn btn-outline-success float-right">Postar</button>
					</form>
				</div>
			</div>
	</div>
</div>
<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
    $texto = isset($_POST['texto']) ? $_POST['texto'] : null;
    $data = isset($_POST['data']) ? $_POST['data'] : null;
      if($titulo != null && $texto != null && $data != null){
        $id = $_SESSION['id'];
				$imagem = $_FILES['imagem_postagem'];
        Usuario::adicionarPostagem($titulo, $texto, $data, $id, $imagem);
      }else {
        header("Location: index_admin.php");
      }
  }
?>
<div id="carregar_postagem">

</div>

<?php
	require_once "includes/footer.php"
?>
