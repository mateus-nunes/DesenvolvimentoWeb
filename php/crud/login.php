<?php

require_once "bd.php";

//Inicia a sessão
session_start();

//Se já estiver logado, vai para a index
if(isset($_SESSION['logado']) and $_SESSION['logado']){
    header("Location:index.php");
}

//verifica ser o form foi enviado
if(isset($_POST['senha']) and $_POST['senha'] != ""){

    $email = $_POST['email'];   
    $senha = $_POST['senha'];

    $sql = $conn->prepare("SELECT * FROM users 
    WHERE mail = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();

    $usuario = $sql->fetch(PDO::FETCH_OBJ);

    if(!$usuario){
        die("Email e senha inválidos!");
    }

    if(password_verify($senha, $usuario->password)){
        
        //passa os valores para a sessão
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['logado'] = true;
        
        //rediciona para a index
        header("Location: index.php");

    }else{
        die("Email e senha inválidos!");
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="" method="POST">
        Email:
        <input type="mail" name="email">
        <br>
        Senha:
        <input type="password" name="senha">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>