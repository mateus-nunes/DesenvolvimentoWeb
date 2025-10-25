<?php
    require_once "bd.php";

    $sql = $conn->prepare("SELECT * FROM users");
    $sql->execute();

    $usuarios = $sql->fetchAll(PDO::FETCH_OBJ);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários cadastrados</title>
</head>
<body>
    <h1>Usuários cadastrados</h1>

    <a href="cadastro.php">Cadastrar usuário</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
        <?php
            foreach($usuarios as $usuario){
                echo "<tr>";
                echo "<td>$usuario->id</td>";
                echo "<td>$usuario->name</td>";
                echo "<td>$usuario->mail</td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>