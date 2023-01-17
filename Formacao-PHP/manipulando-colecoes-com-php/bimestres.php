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
    'maria' => 10,
    'roberto' => 7,
];

var_dump(array_diff_key($notasbimestre1, $notasbimestre2)); // array_diff($array1, $array2, ...) -> faz um array (COM BASE NOS VALORES) mostrando a diferença entre o primeiro array e os outros.
                                                            // array_diff_key($array1, $array2, ...) -> faz um array (COM BASE NAS CHAVES) mostrando a diferença entre o primeiro array e os outros.
                                                            // array_diff_assoc($array1, $array2, ...) -> faz um array (COM BASE EM AMBOS) mostrando a diferença entre o primeiro array e os outros.