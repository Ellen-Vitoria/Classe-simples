<?php

Class Produto
{
    public $ID;
    public $nome;
    public $descricao;
    public $preco;
    public $qt;
    public $taxa = 50;
    public $frete;

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($pr)
    {
        $this->preco = $pr;
    }

    public function getQt()
    {
        return $this->qt;
    }

    public function setQT($q)
    {
        $this->qt = $q;
    }

    public function calcularFrete()
    {
        $this->frete = $this->preco + $this->qt + $this->taxa;
    }
}

$fone = new Produto;
$fone->setPreco(100);
$fone->setQT(1);

echo "O valor a pagar e de R$ {$fone->calcularFrete()}";
