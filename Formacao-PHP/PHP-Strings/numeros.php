<?php

// strings numericas: strings que SÓ possuem numeros funcionam exatamente como apenas numeros sem ser string.

// \/ VERÇÕES ANTIGAS (ANTES DA 8) \/
// strings não numericas convertidas para um numero são iguais a ZERO.
// \/ VERÇÕES NOVAS (8 EM DIANTES) \/
// em caso de comparação entre string não numerica e numero, o numero será transformado em string.

$anoNascimento = '1997';

$idade = 2023 - @$anoNascimento;

echo $idade.PHP_EOL;

if ($anoNascimento === 1997){
    echo 'sim'.PHP_EOL;
}else{
    echo 'não'.PHP_EOL;
}