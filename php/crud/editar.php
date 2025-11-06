<?php

require_once "bd.php";

require_once "verifica_login.php";

$id = $_GET['id'];

$sql = $conn->prepare("SELECT * FROM users WHERE id = :id");
$sql->bindValue(":id",$id);
$sql->execute();
$usuario = $sql->fetch(PDO::FETCH_OBJ);
if(! $usuario){
    die("Usuário não encontrado");
}


//verifica ser o form foi enviado
if(isset($_POST['nome']) and $_POST['nome'] != ""){
    
    $nome =$_POST["nome"];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = $conn->prepare("UPDATE users SET 
    name = :nome, mail = :email, password = :senha 
    WHERE id = :id");
    $sql->bindValue(":nome",$nome);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":senha",$senha);
    $sql->bindValue(":id", $id);
    $sql->execute();

    echo "O Usuário $id foi alterado com sucesso. <br>";

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
    <h1>Edição de usuário</h1>
    
    <form action="" method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $usuario->name; ?>">
        <br>
        Email: <input type="mail" name="email" value="<?php echo $usuario->mail; ?>">
        <br>
        Senha: <input type="text" name="senha" value="<?php echo $usuario->password; ?>">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>