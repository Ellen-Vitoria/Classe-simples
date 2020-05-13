<?php

//Require - Verificar se a Classe Produto existe
require __DIR__ . './produto.php';   //__DIR__: Variável Global

$produto = new Produto();
$produto->nome = "Fone";
$produto->descricao = "Aparelho de escuta";
$produto->preco = "50";
$produto->qt = "2";
$produto->taxa = "0.50";

echo "Nome do Produto: {$produto->nome}<p>"; //Exibindo Valor que foi inserido ao Atributo $nome
//echo $produto->calcularFrete() ou $produto->calcularFrete(); -- Mesmo Resultado
$produto->calcularFrete(); //Como está exibindo um Método Sem Parâmetro, o "echo" deve estar dentro desse Método para aparecer a Frase e o Cálculo

//Exibir Método com Parâmetro:
/*
$produto = new Produto();
$produto->nome = "Fone";
$produto->descricao = "Aparelho de escuta";

echo $produto->calcularFrete(50, 2, 0.50) ou $produto->calcularFrete(50, 2, 0.50);
*/