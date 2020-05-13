<?php

//echo '<pre>'; -- Deixar o código bem definido/formatado, fica melhor no browser

/*Require - Verificar se a Classe Produto existe
  __DIR__: Variável Global

   Como não usar:
   require __DIR__ . './produto.php';   -- Não é aconselhável usar dessa forma, pois a cada f5 que der na página criárá mais um arquivo desse na Memória
   
   Usar:
   require_once 'produto.php'; -- Será criado apenas uma vez
*/
require_once 'produto.php';
require_once 'produto2.php';
require_once 'produto3.php';

//Classe Produto (sem Parêmetro no Método):
$produto = new Produto();
$produto->nome = "Fone";
$produto->descricao = "Aparelho de escuta";
$produto->preco = "50";
$produto->qt = "2";
$produto->taxa = "0.50";

echo "Nome do Produto: {$produto->nome}<p>"; //Exibindo Valor que foi inserido ao Atributo $nome -- Ou usar var_dump/print_r($produto) para exibir todos os Atributos da Classe
$produto->calcularFrete(); // Ou echo $produto->calcularFrete(); // echo "{$produto->calcularFrete()}"


//Classe Produto2 (com Parêmetro no Método):
$produto = new Produto2('Fone', 'Aparelho de escuta', 50, 2, 0.5); // Usando "_construct" é obrigatório inserir todos os valores direto na Instância
echo "<p>O Frete do {$produto->nome} é: R$ {$produto->calcularFrete()}"; // É recomendado colocar essa linha no Método, assim feito como na Classe anterior

/* Sem o Método _construct, ficaria da seguinte forma
     $produto = new Produto();
     $produto->nome = "Fone";
     $produto->descricao = "Aparelho de escuta";

     echo $produto->calcularFrete(50, 2, 0.50) 
                    ou 
     $produto->calcularFrete(50, 2, 0.50);

     ----------------------------------------------------------------------------------

     $produto = new Produto();
     $produto->nome = "Fone";
     $produto->descricao = "Aparelho de escuta";
     $produto->preco = "50";
     $produto->qt = "2";
     $produto->taxa = "0.50";

     echo $produto->calcularFrete($produto->preco, $produto->qt, $produto->taxa) 
                           ou 
     $produto->calcularFrete($produto->preco, $produto->qt, $produto->taxa);
*/

//Classe Produto3 (Get-Set):
$produto = new Produto3();
$produto->nome = "Fone";
$produto->descricao = "Aparelho de escuta";
$produto->setPreco(50); //No caso de texto, colocar aspas simples
$produto->setQt(2);
$produto->setTaxa(0.5);

var_dump($produto);
echo "O Frete do {$produto->nome} é = R$ {$produto->calcularFrete()}";
//echo '<pre>';