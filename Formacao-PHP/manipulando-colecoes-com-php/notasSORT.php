<?php

$notas = [
    'ana' => '10',
    'joao' => 8,
    'maria' => 9,
    'roberto' => 7,
    'vinicius' => null
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


// \/ VERIFICANDO VALORES \/

// gettype() -> mostra o tipo da variavel | is_array() -> mostra se é um array.

if(is_array($notas)){
    echo 'sim, é um array'.PHP_EOL;
}

var_dump(array_is_list($notas)); // array_is_list() -> verifica se o array é numerico e não pula chaves (comportamento de lista)

var_dump(array_key_exists('vinicius', $notas)); // array_key_exists(chave, $array) -> retorna se existe uma chave no array com os parametros indicados.

echo 'ana fez a prova?'.PHP_EOL;
var_dump(isset($notas ['ana'])); // isset() -> retorna se uma das chaves do array existe e tem um valor não nulo.

echo 'alguem tirou 10?'.PHP_EOL;
var_dump(in_array(10, $notas, true)); // in_array(item, $array, stirct: True/False) -> retorna se existe um valor especificado na função dentro do array, ignorando as chaves.
                                      // strict -> procura estritamente se o tipo indicado está presente no array (== ou ===), podendo ser uma string, numero ou qualquer outro tipo.

echo 'quem tirou 10?'.PHP_EOL;
var_dump(array_search(10, $notas, true)); // array_search(valor, $array, stirct: True/False) -> busca no array o valor e retorna a chave onde ele estiver armazenado.
                                          // strict -> procura estritamente se o tipo indicado está presente no array (== ou ===), podendo ser uma string, numero ou qualquer outro tipo.