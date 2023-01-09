<?php

function exibemensagem(string $mensagem){
    echo $mensagem .PHP_EOL;
}


function sacar(array $conta, float $valorasacar): array
{
    if ($valorasacar > $conta['saldo']){
        exibemensagem('Voce não pode sacar');
    }else{
        $conta['saldo'] -= $valorasacar;
    }
    return $conta;
}

function depositar(array $conta, float $valoradepositar): array
{
    if ($valoradepositar > 0){
        $conta['saldo'] += $valoradepositar;
    }else{
        exibemensagem('depositos precisam ser positivos');
    }
    
    return $conta;
}



// utilizar o return no codigo de uma função faz com que a funcionalidade dela coniga ser armazenada em uma variavel. exp:   $var = funct();





$contascorrentes = [

'123.456.789-10' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
],

'123.456.789-11' => [
    'titular' => 'Maria',
    'saldo' => 10000
],

'123.456.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
]

];







$contascorrentes['123.456.789-12'] = sacar($contascorrentes['123.456.789-12'], 500);

$contascorrentes['123.456.789-10'] = depositar($contascorrentes['123.456.789-10'], 500);






foreach ($contascorrentes as $cpf => $conta){
    exibemensagem($cpf." ".$conta['titular']." ".$conta['saldo']);
}