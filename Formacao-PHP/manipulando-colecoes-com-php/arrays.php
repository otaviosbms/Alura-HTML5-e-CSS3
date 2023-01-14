<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'

];

foreach ($array as $numeral => $nomenumero){
    echo "$numeral em portugues é: $nomenumero".PHP_EOL;
}

echo "total: " . count($array).PHP_EOL;