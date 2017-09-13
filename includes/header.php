<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset="utf-8">
    <title>MyMobile</title>
    <link rel="icon" type="image/png" href="imagens/s8.png">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="includes/css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald" rel="stylesheet">
    <script src="includes/js/jquery-3.2.1.js"></script>
    <script src="includes/js/script.js"></script>
  </head>
  <body class='img-fundo'>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php" style="width:10%;"><img src="imagens/logo.png" width="100%"></a>
      <a class="navbar-brand" href="index.php">MyMobile</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" id="form_buscar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <input class="form-control" name="buscar" type="text" id="buscar" placeholder="Procurar" aria-label="Procurar">
          <div style="position:absolute; margin-top:90px;">
            <ul class="list-group" id="resultado"></ul>
          </div>

        </form>
      </div>
    </nav>
