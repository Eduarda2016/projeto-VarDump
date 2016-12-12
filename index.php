<?php

require __DIR__.'/vendor/autoload.php';
echo("Exemplo 01:");
//Cria uma array de 4 posições. A quarta posição é um outro array de 3 posições.
$a = array (1, 2.3 , "Jeanderson", array ("Primeira posição", "Segunda posição", "Terceira posição"));

//O var_dump vai exibir o tipo da variável $a (array) e sua estrutura 
var_dump ($a);

echo("Exemplo 02:");

$b = 7.5;
$c = false;

//Vai exibir o tipo das variáveis $b e $c e seus respectivos valores
var_dump($b,$c);
?>