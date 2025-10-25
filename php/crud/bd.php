<?php

$host = "localhost";
$dbname = "loja";
$user = "root";
$pass = "";

//PDO
$conn = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $pass);
