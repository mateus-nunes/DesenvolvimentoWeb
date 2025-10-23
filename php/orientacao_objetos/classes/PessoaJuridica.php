<?php

class PessoaJuridica
{
    protected $cnpj;
    protected $ie;

    public function setCnpj($cnpj)
    {
        //Validação CNPJ
        if (strlen($cnpj) != 14) {
            throw new Exception("CNPJ inválido! O CNPJ deve conter 14 caracteres");
        }
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public static function validarCnpj($cnpj){
        if (strlen($cnpj) != 14) {
            return false;    
        }
        return true;
    }
}