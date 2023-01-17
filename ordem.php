<?php



$notas = [
    10,
    8,
    9,
    7
];

$notasordenadas = $notas;

sort($notasordenadas);    //  a função sort espera um array de referencia (&), ou seja, ela modifica o valor de uma variável sem clonar ela.

echo 'desordenadas';
var_dump($notas);    //  var_dump é um echo onde é exibido todo o conteudo de variaveis, sendo utilizado apenas em ambiente de desenvolvimento.

echo 'ordenadas';
var_dump($notasordenadas);