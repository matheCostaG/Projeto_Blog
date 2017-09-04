<?php 
require_once "includes/header.php";

?>
<div class="formulario">
  <div class="container ">
    <div class="row">
      <div class="col-md-6">
        <form class="">
          <div class=" form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id=""  placeholder="E-mail">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
          </div>
          <button type="submit" class="btn btn-outline-info">Entrar</button>
        </form><br>
        <button class="btn btn-outline-dark">Torna-se Administrador</button>
      </div>
    </div>
  </div>
</div>


<?php
require_once "includes/footer.php";
?>