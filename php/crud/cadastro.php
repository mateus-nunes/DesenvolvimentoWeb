<?php

require_once "bd.php";

//verifica ser o form foi enviado
if(isset($_POST['nome']) and $_POST['nome'] != ""){
    
    $nome = $_POST["nome"];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = $conn->prepare("INSERT INTO users(name,mail,password) VALUES(:nome,:email,:senha)");
    $sql->bindValue(":nome",$nome);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":senha",$senha);
    $sql->execute();

    //retorna o id do usuário cadastrado
    $id = $conn->lastInsertId();

    echo "O Usuário $id foi criado com sucesso. <br>";

    echo "<a href='index.php'>Voltar para o inicio</a> <br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de usuário</h1>
    
    <form action="" method="POST">
        Nome: <input type="text" name="nome">
        <br>
        Email: <input type="mail" name="email">
        <br>
        Senha: <input type="password" name="senha">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>