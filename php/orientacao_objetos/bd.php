<?php

$host = "localhost";
$dbname = "loja";
$user = "root";
$pass = "";

//PDO
$conn = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $pass);

//$sql = "INSERT INTO users(name, mail, password) VALUES('Mateus','mateus@mail.com', 1234)";

$sql = "SELECT * FROM users";
$data = $conn->query($sql);
$users = $data->fetchAll();

foreach($users as $user){
    echo "Nome = " . $user['name'] . "<br>";
}
var_dump($users);

//var_dump($data);
//MySQLi
$conn2 = new MySQLi($host, $user, $pass, $dbname);
//var_dump($conn2);