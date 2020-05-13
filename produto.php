<?php

Class Produto
{
    public $ID;
    public $nome;
    public $descricao;
    public $preco;
    public $qt;
    public $taxa;
    public $frete;

/*
    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco) //Nome do Parâmetro pode ser o mesmo do Atributo
    {
        $this->preco = $preco;
    }

    public function getQt()
    {
        return $this->qt;
    }

    public function setQt($q) //Nesse, o nome do Parâmetro é diferente do Atributo
    {
        $this->qt = $q;
    }
*/

    public function calcularFrete()
    {
        $this->frete = ($this->preco * $this->qt) + $this->taxa;
        echo "O Frete do Produto é R$ {$this->frete}";
    }
}
