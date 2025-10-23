<?php


abstract class MetodoPagamento
{
    public $nome;
    public $juros;
    public $valor;

    abstract function pagar();

    public function calcular_juros()
    {
        return $this->valor * $this->juros;
    }

}