<?php

Class Produto2
{
    public $nome, $descricao, $preco, $qt, $taxa; // Pode colocar os Atributos na mesma linha

    public function __construct($nome, $desc, $preco, $q, $tx)
    {
        $this->nome = $nome;
        $this->descricao = $desc;
        $this->preco = $preco;
        $this->qt = $q;
        $this->taxa = $tx;
    }

    public function calcularFrete()
    {
        return ($this->preco * $this->qt) + $this->taxa;
    }

/*
    Poderia resumir tudo em um só Método:

    public function calcularFrete($preco, $qt, $taxa)
    {
        $this->preco = $preco;
        $this->qt = $qt;
        $this->taxa = $taxa;

        $this->frete = ($this->preco * $this->qt) + $this->taxa;

        echo "O Frete do Produto é {$this->frete}";
    }
*/
}


