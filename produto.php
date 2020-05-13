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

    public function calcularFrete()
    {
        $this->frete = ($this->preco * $this->qt) + $this->taxa;
        echo "O Frete do {$this->nome} é R$ {$this->frete}";
    }
}
