<?php

require_once("./classes/Produto.php");
require_once("./classes/Fabricante.php");
require_once("./classes/Caracteristica.php");
require_once("./classes/Carrinho.php");
require_once("./classes/PessoaJuridica.php");
/*
$pj = new PessoaJuridica();
$pj->setCnpj(12345678901234);

*/
$fab = new Fabricante("Apple", "California, USA");

$fab->setCnpj(12345678901234);
/*
echo $pj->getCnpj();
echo "<br>";
echo $fab->getCnpj();

$fab = new Fabricante("Apple", "California, USA");
$fab->setCnpj("12345678901234");
echo $fab->getCnpj();


echo "Margem de lucro dos produtos: " . Produto::MARGEM_LUCRO . "%<br>";

$prod = new Produto("Iphone 13", 4000);
$prod2 = new Produto("Iphone 14", 6000);
$prod3 = new Produto("MacBook", 17000);

echo "Valor final: " . $prod->getValorFinal() . "<BR>";

//Agregação

$car = new Carrinho();
$car->addItem($prod);
$car->addItem($prod2);
$car->addItem($prod3);
echo "Valor do carrinho: " . $car->getValorTotal(). "<BR>";

//Associação
$prod->fabricante = $fab;

//Composição
$prod->addCaracteristica("Cor", "Preto");
$prod->addCaracteristica("Armazenamento", "1TB");
$prod->addCaracteristica("5G", "SIM");
$prod->addCaracteristica("Dual-chip", "NÃO");
$prod->addCaracteristica("Câmera", "30mp");
$prod->addCaracteristica("Tela", "6,2''");

//$prod->upload("/imgs/produtos", $file);

echo "Nome: " . $prod->getNome() .
    ", fabricado por: " . $prod->fabricante->getNome();
echo "<br>";

echo "<ul>";
foreach ($prod->getCaracteristicas() as $carac) {
    echo "<li>" . $carac->getNome() . ": "
        . $carac->getValor() . "</li>";
}
echo "</ul>";
echo "CARRINHO<br>";

echo "<ul>";
foreach ($car->getItens() as $item) {
    echo "<li>" . $item->getNome() . ": "
        . $item->getValor() . "</li>";
}
echo "</ul>";
echo "Valor Total R$ " . $car->getValorTotal();
echo "<br>";

echo "Total de produtos criados:  " . Produto::$total_produtos;

//Produto::$total_produtos = 0;

echo "Total de produtos criados:  " . Produto::$total_produtos;

*/

require_once ("./classes/CartaoCredito.php");

$cartao = new CartaoCredito();