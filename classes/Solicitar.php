<?php
  class Solicitar{
    private $nome;
    private $login;
    private $senha;
    private $ativado;
    private $codigo;


    public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this->nome = $nome;
    }
    public function getLogin(){
      return $this->login;
    }
    public function setLogin($login){
      $this->login = $login;
    }
    public function getSenha(){
      return $this->senha;
    }
    public function setSenha($senha){
      $this->senha = md5($senha);
    }
    public function getAtivado(){
      return $this->ativado;
    }
    public function setAtivado($ativado){
      $this->ativado = $atiavdo;
    }
    public function getCodigo(){
      return $this->codigo;
    }
    public function setCodigo($codigo){
      $this->codigo = uniqid(rand());
    }

    public function __construct($nome, $login, $senha){
      $this->setNome($nome);
      $this->setLogin($login);
      $this->setSenha($senha);
      $this->setAtivado(0);
      $this->setCodigo();
    }

    public function solicitarAdmin(){
      
    }




  }


 ?>
