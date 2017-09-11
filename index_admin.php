<?php
	require_once "classes/config.php";
	if($_SESSION['id'] == ""){
		header("Location: index.php");
	}
?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div id="div_admin">
			</br><button class="btn btn-outline-primary btn-icone icone2 " id="btn-admin">
				<i class="material-icons">person_add</i>Adicionar Admin</button>
			</div></br>
		<a href="visualizar.php"><button class="btn btn-outline-warning btn-icone icone3">
			<i class="material-icons">visibility</i>Visualizar Posts</button></a></br></br>
		<a href="sair.php"><button class="btn btn-outline-danger btn-icone icone3"><i class="material-icons">cancel</i>Sair</button></a>
		</div>
			<div class="col-md-9">
				<div class="jumbotron" >
					<form  method="post" enctype="multipart/form-data">
						<input type="text" name="titulo" class="border border-dark rounded col-md-12" id=""
							placeholder="Titulo da Postagem !"> </br></br>
							<textarea class="ckeditor" name="texto"></textarea> </br>
								<input type="file" name="imagem_postagem" class="btn btn-outline-primary ">
										<input class=" btn-link " type="date" type="tel" name="data">
											<button type="submit" class="btn btn-outline-success btn-icone2 icone4 float-right"><i class="material-icons">check</i>Postar</button>
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
<?php
	require_once "includes/footer.php"
?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
