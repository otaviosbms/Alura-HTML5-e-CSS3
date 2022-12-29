<?php

$altura = 1.73;
$peso = 83;

$imc = $peso / ($altura * $altura);


if ($imc <= 18.5){
    echo "IMC = $imc .". PHP_EOL,"Abaixo do peso";
}else if ($imc >= 18.5 && $imc <= 24.9){
    echo "IMC = $imc.". PHP_EOL,"Peso ideal.";
}else{
    echo "IMC = $imc.". PHP_EOL,"Acima do peso.";
}
