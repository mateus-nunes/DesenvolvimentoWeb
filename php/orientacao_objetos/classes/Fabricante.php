<?php
require_once("PessoaJuridica.php");

class Fabricante extends PessoaJuridica
{
    public $nome;
    public $endereco;

    public function __construct($nome, $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getNome()
    {
        return $this->nome;
    }

    //Sobrescrita -> Override
    public function getCnpj()
    {
        return "CNPJ do fabricante: " . $this->cnpj;
    }
}