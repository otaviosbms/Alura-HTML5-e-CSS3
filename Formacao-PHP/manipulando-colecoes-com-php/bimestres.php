<?php

$notasbimestre1 = [
    'ana' => 10,
    'joao' => 8,
    'maria' => 9,
    'roberto' => 7,
    'vinicius' => 6
];

$notasbimestre2 = [
    'ana' => 9,
    'joao' => 8,
    'roberto' => 7,
];


// array_diff($array1, $array2, ...) -> faz um array (COM BASE NOS VALORES) mostrando a diferença entre o primeiro array e os outros.
// array_diff_key($array1, $array2, ...) -> faz um array (COM BASE NAS CHAVES) mostrando a diferença entre o primeiro array e os outros.
// array_diff_assoc($array1, $array2, ...) -> faz um array (COM BASE EM AMBOS) mostrando a diferença entre o primeiro array e os outros.


$alunosfaltantes = array_diff_key($notasbimestre1, $notasbimestre2);

$nomesalunos = array_keys($alunosfaltantes);
$notasalunos = array_values($alunosfaltantes);

// array_combine($array1(chave), $array2(valor)) -> combina arrays com o mesmo tamanho.

var_dump(array_combine($notasalunos, $nomesalunos));

// array_flip($array) -> inverte o array (entre chaves e valores).

var_dump(array_flip($alunosfaltantes));
