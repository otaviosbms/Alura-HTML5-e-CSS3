<?php

$idadelist = [21, 23, 19, 25 , 30, 41, 18];


list($idadevinicius, $idadejoao, $idademaria) = $idadelist; // com estrutura, é possivel selecionar o s 3 primeiros itens de um array, dentro de outra lista.


unset($idadelist[4]);



$umaidade = $idadelist[3];

$idadelist[] = 20;

echo $umaidade;


foreach ($idadelist as $idade ){
    echo $idade.PHP_EOL;
}