<?php
  class Solicitar{
    private $nome;
    private $email;
    private $login;
    private $senha;
    private $ativado;


    public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this->nome = $nome;
    }


    public function getEmail(){
      return $this->email;
    }
    public function setEmail($email){
      $this->email = $email;
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
      $this->ativado = $ativado;
    }

    public function __construct($nome,$email, $login, $senha){
      $this->setNome($nome);
      $this->setEmail($email);
      $this->setLogin($login);
      $this->setSenha($senha);
      $this->setAtivado(0);
    }

    public function solicitarAdmin(){
      $conn = new mysqli("localhost", "root", "170s6612", "blog");
      if($conn->connect_error){
        echo "Erro na conexão com o banco";
      }
      $stmt = $conn->prepare("INSERT INTO admin(nome, senha, login, email, ativado) VALUES(?,?,?,?,?)");
      $stmt->bind_param('ssssi',$this->getNome(), $this->getSenha(), $this->getLogin(), $this->getEmail(), $this->getAtivado());
      if($stmt->execute()){
        echo "DEU CERTINHO";
      }
    }
  }


 ?>
