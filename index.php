<?php

//Require - Verificar se a Classe Produto existe
require __DIR__ . './produto.php';   //__DIR__: Variável Global
require __DIR__ . './produto2.php';


//Classe Produto (sem Parêmetro no Método):
$produto = new Produto();
$produto->nome = "Fone";
$produto->descricao = "Aparelho de escuta";
$produto->preco = "50";
$produto->qt = "2";
$produto->taxa = "0.50";

echo "Nome do Produto: {$produto->nome}<p>"; //Exibindo Valor que foi inserido ao Atributo $nome
$produto->calcularFrete(); // Ou echo $produto->calcularFrete();


//Classe Produto2 (com Parêmetro no Método):
$produto = new Produto2('Fone', 'Aparelho de escuta', 50, 2, 0.5); // Usando "_construct" é obrigatório inserir todos os valores direto na Instância
echo "O Frete do {$produto->nome} é: R$ {$produto->calcularFrete()}"; // É recomendado colocar essa linha no Método, assim feito como na Classe anterior

/* Sem o Método _construct, poderia ficar da seguinte forma*/
//$produto = new Produto();
//$produto->nome = "Fone";
//$produto->descricao = "Aparelho de escuta";
//echo $produto->calcularFrete(50, 2, 0.50) ou $produto->calcularFrete(50, 2, 0.50);