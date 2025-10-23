<?php

class CartaoCredito extends MetodoPagamento
{

    public function pagar()
    {
        //GERAR AUTORIZAÇÃO

        return true;
    }
}