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

}

$produto = new Produto2('Fone', 'Aparelho de escuta', 50, 2, 0.5); // Usando "_construct" é possível inserir todos os valores direto na Instância
echo "O Frete do {$produto->nome} é: R$ {produto->calcularFrete()}";
