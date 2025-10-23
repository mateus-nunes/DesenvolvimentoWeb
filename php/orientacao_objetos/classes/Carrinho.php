<?php

class Carrinho
{

    public DateTime $criado_em;
    public array $itens;

    public function __construct()
    {
        $this->criado_em = new DateTime();
    }

    public function addItem(Produto $produto)
    {
        $this->itens[] = $produto;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getValorTotal()
    {
        $total = 0;
        foreach ($this->itens as $prod) {
            $total += $prod->getValor();
        }
        return $total;
    }
}