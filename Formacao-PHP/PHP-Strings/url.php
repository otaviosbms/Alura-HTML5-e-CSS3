<?php

$url = 'https://alura.com.br';

// \/ verifica o começo da string \/
if (str_starts_with($url, 'https')){
    echo 'é uma url segura';
}else{
    echo 'não é uma url segura';
}

echo PHP_EOL;

// \/ verifica o final da string \/
if (str_ends_with($url, '.br')){
    echo 'é um dominio do brasil';
}else{
    echo 'não é um dominio do brasil';
}

echo PHP_EOL;

