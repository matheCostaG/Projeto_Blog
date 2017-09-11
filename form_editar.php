<?php
	require_once "includes/config.php";
	if($_SESSION['id'] == ""){
		header("Location: index.php");
	}
  $id = $_GET['id'];
  if($id != null){
  require_once "includes/conexao.php";
  $result = $conn->query("SELECT * FROM publicacao WHERE id = $id");
  $row = $result->fetch_assoc();
	$conn->close();
  }
?>
</br><div class="container">
	<div class="row">
			<div class="col-md-12">
				<div class="jumbotron" >
					<form  method="post" enctype="multipart/form-data" action="editar.php">
            <input type="hidden" name="id" value="<?=$id?>">
						<input type="text" name="titulo" value="<?= $row['titulo']?>" class="border border-dark rounded col-md-12" placeholder="Titulo da Postagem !"> </br></br>
							<textarea class="ckeditor" name="texto"><?= $row['texto']?></textarea> </br>
								<input type="file" name="imagem_postagem" class="btn btn-outline-primary ">
										<input class="btn-link" value="<?= $row['data']?>" type="date" type="tel" name="data">
											<button type="submit" class="btn btn-outline-success btn-icone2 icone4 float-right"><i class="material-icons">check</i>Editar</button>
					</form>
				</div>
			</div>
	</div>
</div>
<?php
	require_once "includes/footer.php"
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
