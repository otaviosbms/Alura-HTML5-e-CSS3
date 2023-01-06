<?php



$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',

];

//array aceitam como itens somente numeros inteiros ou strings, caso contrario, o php tentara converter os outros tipos de dados.
//neste exemplo, o tipos que são invalidos são convertidos e as informações são redefinidas entre os itens.



foreach ($array as $item){
    echo $item.PHP_EOL;
}