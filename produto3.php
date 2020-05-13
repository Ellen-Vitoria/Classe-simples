<?php

Class Produto3
{
    public $nome, $descricao, $preco, $qt, $taxa, $frete;

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getQt()
    {
        return $this->qt;
    }

    public function setQt($qt)
    {
        $this->qt = $qt;
    }

    public function getTaxa()
    {
        return $this->taxa;
    }

    public function setTaxa($tx)
    {
        $this->taxa = $tx;
    }

    public function getFrete()
    {
        return $this->frete;
    }

    public function setFrete($frete)
    {
        $this->frete = $frete;
    }

    public function calcularFrete()
    {
        return ($this->getPreco() * $this->getQt()) + $this->getTaxa();
    }
}