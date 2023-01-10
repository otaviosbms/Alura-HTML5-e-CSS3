<?php

function exibemensagem(string $mensagem){
    echo $mensagem .'<br>';
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


function titularcomletrasmaiusculas(array &$conta)  // sem utilizar o '&', é informado na função apenas uma cópia do valor do array, não alterando o endereço em si.
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeconta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}


// utilizar o return no codigo de uma função faz com que a funcionalidade dela coniga ser armazenada em uma variavel. exp:   $var = funct();