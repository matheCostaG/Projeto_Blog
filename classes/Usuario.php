<?php
require_once "includes/config.php";
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
      require_once "includes/conexao.php";
      $senhaAdm = md5($this->getSenha());
      $stmt = $conn->prepare("INSERT INTO admin(nome, senha, login, email) VALUES(?,?,?,?)");
      $stmt->bind_param('ssss',$this->getNome(), $senhaAdm, $this->getLogin(), $this->getEmail());
      if($stmt->execute()){
        echo "<script>alert('Cadastrado com sucesso');</script>";
        $admin = new Verificar();
        $admin->verificarEmail($this->getNome(), $this->getEmail(), $this->getSenha(), $this->getLogin());
        $conn->close();
      }
    }

    public static function entrar($login, $senha){
        require_once "includes/conexao.php";
        $stmt = $conn->prepare("SELECT * FROM admin WHERE login = ? and senha = ?");
        $stmt->bind_param('ss', $login, $senha);
        $stmt->execute();
        $result = $stmt->get_result();
          if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $conn->close();
          }else{
            header("Location: admin.php");
          }
    }
    public static function adicionarPostagem($titulo, $texto, $data, $id, $imagem){
      require_once "includes/conexao.php";
      $stmt = $conn->prepare("INSERT INTO publicacao (titulo, texto, id_admin, data) VALUES(?,?,?,?)");
      $stmt->bind_param('ssis', $titulo, $texto, $id, $data);
      if($stmt->execute()){
        echo "<script>alert(Dados inseridos);</script>";
      }
      $idPubli = $stmt->insert_id;
      if($imagem['error']){
        header("Location: index_admin.php");
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
        $conn->close();
      }else{
        echo "Erro no upload da imagem";
      }
    }
    public static function editarPostgem($titulo, $texto, $data, $id, $imagem){
      require_once "includes/conexao.php";
      $conn->query("UPDATE publicacao SET titulo = '$titulo' , texto = '$texto', data = '$data' where id = $id");
      $pastaImagens = 'imagens';
      if(!is_dir($pastaImagens)){
        mkdir($pastaImagens);
      }
      $new_path = $pastaImagens. DIRECTORY_SEPARATOR.$id.".jpg";
      if(move_uploaded_file($imagem['tmp_name'], $new_path)){
        $imagem_postagem = $id.".jpg";
        $conn->query("UPDATE publicacao SET img_postagem = '$imagem_postagem' WHERE id = $id");
        $conn->close();
      }
      header("Location: visualizar.php");
    }

  }
 ?>
