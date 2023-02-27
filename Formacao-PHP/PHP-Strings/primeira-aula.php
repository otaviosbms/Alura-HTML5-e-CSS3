<?php

$nome = 'Vinicius dos santos';

// \/ procura dentro de uma string uma outra string, retornando um booleano \/

$ehDaMinhaFamilia = str_contains($nome, 'Dias');

if ($ehDaMinhaFamilia){
    echo "$nome é da minha familia" .PHP_EOL;
}else{
    echo "$nome não é da minha familia" .PHP_EOL;
}