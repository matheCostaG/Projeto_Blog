<?php
	session_start();
	if($_SESSION['id'] == ""){
		header("Location: index.php");
	}
?>

<form class="" method="post" action="cadastrar.php">
	<div class=" form-group icone">
		<label for="nome">Nome:</label>
			<input type="text" name="nome" class="form-control" id="" placeholder="Nome">
				<i class="material-icons">face</i>
	</div>
		<div class=" form-group icone">
			<label for="email">E-mail:</label>
				<input type="email" name="email" class="form-control" id=""  placeholder="E-mail">
					<i class="material-icons">mail_outline</i>
		</div>
			<div class="form-group icone">
				<label for="login">Login:</label>
					<input type="text" name="login" class="form-control" id="" placeholder="Login">
						<i class="material-icons">person_outline</i>
			</div>
				<div class="form-group icone">
					<label for="senha">Senha:</label>
						<input type="password" name="senha" class="form-control" id="" placeholder="Senha">
							<i class="material-icons">lock_outline</i>
				</div>
	<button type="submit" class="btn btn-icone icone5 btn-light"><i class="material-icons">check_circle</i>Adicionar</button>

</form>
