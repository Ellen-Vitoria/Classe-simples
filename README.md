---- Esse Projeto é o começo de como faz Programação Orientado a Objeto (POO) em PHP:
     Haverá três formas de Classes baseado em um mesmo Objeto "Produto" (produto, produto2, produto3)

a) Em "produto.php", o Método "calcularFrete()" não terá parâmetros e a forma de exibir será atribuíndo o cálculo na variável "$frete" e, em seguida, impressa por meio do "echo" com uma frase (Tudo isso dentro do Método).

--------------------------------------------------------------------------------------------------------------------------

b) Em "produto2.php",o Método "calcularFrete()" terá parâmetros e esses parâmetros serão atribuídos às "variáveis" (Atributos) da Classe Produto2 e, ao invés de ser impressa por "echo" dentro do Método, será retornado apenas o cálculo (apesar de ser recomendado que a frase("echo") esteja dentro do Método).

--------------------------------------------------------------------------------------------------------------------------

c) Em "produto3.php", são usados os Métodos Get/Set, porém esse Métodos são mais recomendados para quando é preciso fazer uma Validação ou Regra específica.

--------------------------------------------------------------------------------------------------------------------------

O Resultado aparecerá no arquivo "index.php", em que serão acessados todas as Classes (sempre separar por arquivos - Um para as Classes e outro para chamar essas Classe, no caso, o index).