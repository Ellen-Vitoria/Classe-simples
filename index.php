<?php

//Require - Verificar se a Classe existe
require __DIR__ . './produto.php';   //__DIR__: Variável Global

$produto = new Produto();
$produto->nome = "Fone";
$produto->descricao = "Aparelho de escuta";
$produto->preco = "50";
$produto->qt = "2";
$produto->taxa = "0.50";

echo "Nome do Produto: {$produto->nome}<p>"; //Exibindo Valor que foi inserido ao Atributo $nome
$produto->calcularFrete(); //Como está exibindo um Método, o "echo" deve estar dentro desse Método para aparecer a Frase e o Cálculo
