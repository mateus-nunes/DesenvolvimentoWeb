<?php

require_once "MetodoPagamento.php";

class Pix extends MetodoPagamento
{

    public function pagar()
    {
        //GERAR AUTORIZAÇÃO

        return true;
    }
}