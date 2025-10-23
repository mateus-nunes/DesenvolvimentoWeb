<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
        <?php
        include("bd.php");
        include("menu.php");

        echo "Banco: " . BD_NAME . " || Porta: " . BD_PORT;
        echo connect_bd();
        ?>
    </header>

    <table>
        <thead>
            <th>Nome</th>
            <th>Item</th>
        </thead>
        <tbody>
            <?php
            $frutas = array("maçã", "banana", "uva", "pera");

            foreach ($frutas as $fruta) {
                echo "<tr>";
                echo "<td>Nome</td>";
                echo "<td>" . $fruta . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php



    echo "<br>";

    var_dump(FALSE xor TRUE);

    $nome = "Mateus";
    echo "<h1>Hello World!</h1>";
    echo "Olá, " . $nome;
    echo "<br>";
    echo "Olá, $nome";
    echo "<br>";
    echo 'Olá, $nome';
    echo "<br>";
    //Comentário
    /*
        comentário de multipla linha
    */
    # Comentário
    

    $x = 10;

    if ($x > 5) {
        echo "Maior que 5";
    } else {
        echo "Menor que 5";
    }

    if ($x > 5):
        echo "Maior que 5";
    else:
        echo "Menor que 5";
    endif;
    echo "br";
    for ($i = 0; $i < 5; $i++) {
        echo $i . "<br>";
    }

    for ($i = 0; $i < 5; $i++):
        echo $i . "<br>";
    endfor;

    function teste()
    {
        echo "Eu sou uma função<br>";
    }
    teste();


    function quad(int $n): int
    {
        $result = $n * $n;
        return $result;
    }

    echo $result;
    echo "Quadrado de 2 é " . quad(2);
    ?>
</body>

</html>