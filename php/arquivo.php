<?php
//fopen mode
//r     -> leitura
//w     -> escrita (apaga o conteúdo do arquivo)
//w+    -> leitura e escrita
//a     -> escrita (não apaga o conteúdo)
//a+    -> leitura e escrita
$f = fopen("teste.txt", "a+");

/*
$i = 0;
while (!feof($f)) {
    $txt = fgets($f);
    echo "Linha " . ++$i . ": " . $txt . "<br>";
}
*/

//Escrita
/*
fwrite($f,"Arroz".PHP_EOL);
fwrite($f,"Feijão".PHP_EOL);
fwrite($f,"Açucar".PHP_EOL);
fwrite($f,"Café".PHP_EOL);
fclose($f);

//Leitura
$txt = file_get_contents("teste.txt");
echo $txt;
echo "<br>";
echo str_replace(PHP_EOL,"<br>",$txt);

echo "<br>";
//Escrita
//$txt = file_put_contents("teste.txt","Mateus", FILE_APPEND);
echo $txt;
echo "<br>";

$f = file("teste.txt");
print_r($f);

if(file_exists("teste.txt")){
    echo "Arquivo encontrado";
}else{
    echo "404 Not found";
}

*/


$marcas = array("Ford", "Volvo", "BMW", "Toyota");
$marcas[10] = "Ferrari";
$marcas[] = "Chevrolet";
print_r($marcas);
foreach ($marcas as $m) {
    echo $m . "<br>";
}

$carro = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

foreach ($carro as $info => $valor) {
    echo $info . ": " . $valor . "<br>";
}

$carros = array(
    "Uno" => array(
        "potência" => "1000CV",
        "cor" => "branco",
        "opt" => "Escada no teto"
    ),
    "Gol" => array(
        "potência" => "86cv"
    ),
    "Palio" => array(
        "potência" => "81cv",
        "cor" => "cinza"
    ),
);

foreach ($carros as $nome => $carro) {
    echo "<h1>Carro: " . $nome . "</h1>";
    echo "<ul>";
    foreach ($carro as $carac => $valor) {
        echo "<li>";
        echo $carac . ": " . $valor;
        echo "</li>";
    }
    echo "</ul>";
}