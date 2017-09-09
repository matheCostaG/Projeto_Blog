<?php
  session_start();
  spl_autoload_register(function($className){
    include $className.'.php';
  });
  require_once "includes/header.php";
  
 ?>
