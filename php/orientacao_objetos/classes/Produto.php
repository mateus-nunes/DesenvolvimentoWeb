<?php

require_once("FileUpload.php");

class Produto
{
    use FileUpload;

    public static $total_produtos;

    //atributos
    private string $nome;
    public float $valor;
    private string $descricao;
    const MARGEM_LUCRO = 30;

    private array $caracteristicas;

    public Fabricante $fabricante;

    public function __construct($nome, $valor, $descricao = "")
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->descricao = $descricao;
        self::$total_produtos++;
    }

    public function __destruct()
    {
        echo "<br>Produto: " . $this->nome . ", chegou ao fim";
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setValor($valor)
    {
        if ($valor < 0) {
            throw new Exception("Valor inválido! Não são permitidos valores negativos.");
        }
        $this->valor = $valor;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function addCaracteristica($nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    public function getValorFinal()
    {
        $valor = $this->getValor() * (1 + (self::MARGEM_LUCRO / 100));
        return $valor;
    }
}