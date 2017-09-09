<?php
require_once "classes/config.php";
  class Usuario{
    private $nome;
    private $email;
    private $login;
    private $senha;


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
      $this->senha = $senha;
    }

    public function __construct($nome,$email, $login, $senha){
      $this->setNome($nome);
      $this->setEmail($email);
      $this->setLogin($login);
      $this->setSenha($senha);
    }

    public function cadastrarAdmin(){
      $conn = new mysqli("localhost", "root", "170s6612", "blog");
      if($conn->connect_error){
        echo "Erro ao conectar ao banco";
      }
      $senha = $this->getSenha();
      $senhaAdm = md5($senha);
      $stmt = $conn->prepare("INSERT INTO admin(nome, senha, login, email) VALUES(?,?,?,?)");
      $stmt->bind_param('ssss',$this->getNome(), $senhaAdm, $this->getLogin(), $this->getEmail());
      if($stmt->execute()){
        echo "<script>alert('Cadastrado com sucesso');</script>";
        $admin = new Verificar();
        $admin->verificarEmail($this->getNome(), $this->getEmail(), $this->getSenha(), $this->getLogin());
      }
    }

    public static function entrar($login, $senha){
        $conn = new mysqli("localhost", "root", "170s6612", "blog");
        if($conn->connect_error){
          echo "Erro ao conectar ao banco";
        }
        $conn->conecta_mysql();
        $stmt = $conn->prepare("SELECT * FROM admin WHERE login = ? and senha = ?");
        $stmt->bind_param('ss', $login, $senha);
        $stmt->execute();
        $result = $stmt->get_result();
          if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            header("Location: index_admin.php");
          }else{
            header("Location: admin.php");
          }
    }
    public static function adicionarPostagem($titulo, $texto, $data, $id, $imagem){
      $conn = new mysqli("localhost", "root", "170s6612", "blog");
      if($conn->connect_error){
        echo "Erro ao conectar ao banco";
      }
      $stmt = $conn->prepare("INSERT INTO publicacao (titulo, texto, id_admin, data) VALUES(?,?,?,?)");
      $stmt->bind_param('ssis', $titulo, $texto, $id, $data);
      if($stmt->execute()){
        echo "<script>alert(Dados inseridos);</script>";
      }
      $idPubli = $stmt->insert_id;
      if($imagem['error']){
        echo "Error";
        die();
      }
      $pastaImagens = 'imagens';
      if(!is_dir($pastaImagens)){
        mkdir($pastaImagens);
      }
      $new_path = $pastaImagens. DIRECTORY_SEPARATOR.$idPubli.".jpg";
      if(move_uploaded_file($imagem['tmp_name'], $new_path)){
        $imagem_postagem = $idPubli.".jpg";
        $conn->query("UPDATE publicacao SET img_postagem = '$imagem_postagem' WHERE id = $idPubli");
      }else{
        echo "Erro no upload da imagem";
      }
    }

  }
 ?>
