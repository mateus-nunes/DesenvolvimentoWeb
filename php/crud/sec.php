<?php

require_once "bd.php";

$code = $_GET['code'];

$sql = $conn->prepare("SELECT * FROM users WHERE id = :code");
$sql->bindValue(":code",$code);
$sql->execute();
var_dump($sql->fetchAll());
