<?php

$notas = [
    'ana' => 10,
    'joao' => 8,
    'maria' => 9,
    'roberto' => 7,
    'vinicius' => 6
];


//ksort($notas); // ksort() -> Ordena o array em ordem alfabética se guiando pelas chaves dele.

//krsort($notas); // krsort() -> ordena em ordem alfabetica inversa.

//asort($notas); // asort() -> organiza igual a função sort, porem os nomes das chaves não são alterados "AssociativeSORT".

//rsort($notas);  // rsort() -> orginiza de forma inverça a ordem da função sort normal.

//arsort($notas); // arsort() -> se comporta igual o asort() e o rsort() de forma combinada.

// usort() -> função usada para determinar como a função sort deve ordenar os arrays, esperando uma outra função como parametro (escrever o nome da função em forma de string).

// A usort() pode ser combinada com outras funções de ordem como por exemplo, uksort().
// Todas as variações de funções são modulares, elas podem ser combinadas da forma q vc quiser.


krsort($notas);

var_dump($notas);