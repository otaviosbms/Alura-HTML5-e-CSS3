<?php

$alunos2021 = [
    'ana',
    'joao',
    'maria',
    'roberto',
    'vinicius'
];

$novosalunos = [
    'patricia',
    'Nico',
    'kelderson',
    'daiane',
];


// array_merge -> combina arrays reorganizando as chaves (caso as chaves strings sejam iguais a função reescreve a chave com o ultimo valor). https://www.php.net/manual/pt_BR/function.array-merge.php

// Operador : ... -> "desempacotador de arrays", decompõe um array permitindo alteral ele internamento.

//exemplo de adição de arrays usando o ... -> $alunos2022 = [...$alunos2021, ...$novosalunos].

$alunos2022 = array_merge($alunos2021, $novosalunos);

var_dump($alunos2022);