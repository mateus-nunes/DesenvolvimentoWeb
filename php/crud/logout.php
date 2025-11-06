<?php

if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

//DESTROI A SESSÃO
session_unset();

echo "Logout efetuado com sucesso.<br>";
echo "<a href='index.php'>Voltar o inicio</a>";