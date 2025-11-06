<?php

require_once "bd.php";

if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

//Se não estiver logado, manda para o login
if(! $_SESSION['logado']){
    header("Location: login.php");
}

$sql = $conn->prepare("SELECT * FROM users WHERE id=:id");
$sql->bindValue(":id",$_SESSION['usuario_id']);
$sql->execute();

$usuario_logado = $sql->fetch(PDO::FETCH_OBJ);


