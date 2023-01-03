<?php



$contascorrentes = [

12345678910 => [
    'titular' => 'Vinicius',
    'saldo' => 1000
],

12345678911 => [
    'titular' => 'Maria',
    'saldo' => 10000
],

12345678912 => [
    'titular' => 'Alberto',
    'saldo' => 300
]

];


foreach ($contascorrentes as $cpf => $conta){
    echo $conta['saldo'] .PHP_EOL;
}