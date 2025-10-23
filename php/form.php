<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST">
        <label for="user">Usuário</label>
        <input type="text" name="user">
        <br>
        <label for="password">Senha</label>
        <input type="password" name="password">
        <br>
        <label for="cursos">Cursos:</label>
        HTML
        <input type="checkbox" name="cursos[]" value="HTML">
        CSS
        <input type="checkbox" name="cursos[]" value="CSS">
        JS
        <input type="checkbox" name="cursos[]" value="JS">
        <br>
        <label for="sexo">Sexo:</label>
        Masculino
        <input type="radio" name="sexo" value="M">
        Feminino
        <input type="radio" name="sexo" value="F">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>