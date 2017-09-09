<?php
  require_once "classes/config.php";
  require_once "includes/conexao.php";
?>
<div class="formulario">
  <div class="container ">
    <div class="page-header text-center">
      <h1>Administração</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
        </div>
      <div class="col-md-6 ">
        <div class="c_formulario">
          <div id="conteudoForm">
            <form id="formulario" method="post" action="entrar.php">
              <div class="form-group icone ">
                <label for="email" >Login:</label>
                <input type="text" name="login" class="form-control "  id=""  placeholder="Login" >
                <i class="material-icons">person_outline</i>
              </div>
              <div class="form-group icone">
                <label for="password">Senha:</label>
                <input type="password" name="senha" class="form-control" id="" placeholder="Senha">
                <i class="material-icons">lock_outline</i>
              </div>
              <button type="submit" class="btn btn-outline-info">Entrar</button>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
<?php
require_once "includes/footer.php";
?>
