<?php

class Caracteristica{
    public $nome;
    public $valor;

    public function __construct($nome, $valor) {
        $this->setNome($nome);
        $this->setValor($valor);
    }

    public function setNome($nome)  {
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setValor($valor)  {
        $this->valor = $valor;
    }
    public function getValor(){
        return $this->valor;
    }
}