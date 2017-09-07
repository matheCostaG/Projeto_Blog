<?php
  require_once "classes/config.php";
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
              <div class="form-group">
                <label for="email" >Login:</label>
                <input type="text" name="login" class="form-control" id=""  placeholder="Login">
              </div>
              <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="senha" class="form-control" id="" placeholder="Senha">
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
