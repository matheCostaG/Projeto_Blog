<?php
session_start();
require_once "includes/conexao.php";
if($_SESSION['id'] == ""){
  header("Location: index.php");
}
  $result = $conn->query("select * from admin as a join publicacao as p on a.id = p.id_admin order by p.id DESC");
  while ($row = $result->fetch_assoc()){
   echo "<div class='widget-content'>";
   echo "<table class='table table-striped table-bordered'>";
   echo "<thead>";
   echo "<tr>";
   echo "<th> Título da Postagem ". $row['id']."</th>";
   echo "<th> Data </th>";
   echo "<th> Texto</th>";
   echo "<th> Imagem</th>";
   echo "<th> Editar</th>";
   echo "<th> Excluir</th>";
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";
   echo "<tr>";
   echo "<td> ".$row['titulo']."</td>";
   echo "<td> ".$row['data']."</td>";
   echo "<td> ".$row['texto']."</td>";
   echo "<td><img class='img-thumbnail' src='imagens/".$row['img_postagem']."'></td>";
   echo "<td><a href='form_editar.php?id=".$row['id']."' class='btn btn-small btn-success'><i class='material-icons'>edit</i></a></td>";
   echo "<td><button value=".$row['id']." class='btn btn-danger btn-small btn-excluir'><i class='material-icons'>delete</i></button></td>";
   echo "</tr>   ";
   echo "</tbody>";
   echo "</table>";
   echo "</div> </br>";
  }
?>
