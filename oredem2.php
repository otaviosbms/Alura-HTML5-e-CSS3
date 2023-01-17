<?php


$notas = [

    [
        'aluno' => 'maria',
        'nota' => 10,

    ],

    [
        'aluno' => 'vinicius',
        'nota' => 6,
    ],

    [
        'aluno' => 'ana',
        'nota' => 9,
    ]

];


//  \/  função a ser usada no USORT \/

function ordenanota(array $nota1, array $nota2): int
{

    /*
    if ($nota1['nota'] > $nota2['nota']){
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']){
        return 1;
    }

    return 0;
    */

    return $nota2['nota'] <=> $nota1['nota'];    // O operador <=> equevale ao codigo comentado acima. 


}

//  usort() -> função usada para determinar como a função sort deve ordenar os arrays, esperando uma outra função como parametro (escrever o nome da função em forma de string).


usort($notas, 'ordenanota');
var_dump($notas);