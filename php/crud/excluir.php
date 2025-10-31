<?php

require_once "bd.php";

$id = $_GET['id'];

$sql = $conn->prepare("SELECT * FROM users WHERE id = :id");
$sql->bindValue(":id",$id);
$sql->execute();
$usuario = $sql->fetch(PDO::FETCH_OBJ);
if(! $usuario){
    die("Usuário não encontrado");
}

$sql = $conn->prepare("DELETE FROM users WHERE id = :id");
$sql->bindValue(":id",$id);
$sql->execute();

echo "O usuario $id foi excluido com sucesso!<br>";
echo "<a href='index.php'>Voltar para o inicio</a> <br>";
