<?php

// include -> usar para incluir aquivos complementeres no codigo, porem não necessarios.
// require -> usar para incluir aquivos necessarios para o funcionamento do codigo. (hierarquia dos erros)
// require/include_once -> especifica que o arquivo deve ser importado apenas uma vez, evitando erros caso ele seja mais de uma vez importado.


require 'funcoes.php';


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

// chamada das funções sacar, depositar e letras maiusculas

$contascorrentes['123.456.789-12'] = sacar($contascorrentes['123.456.789-12'], 500);

$contascorrentes['123.456.789-10'] = depositar($contascorrentes['123.456.789-10'], 500);

titularcomletrasmaiusculas($contascorrentes['123.456.789-10']);



// remove um item do array

unset($contascorrentes['123.456.789-12']);


// adiciona um item no array

$contascorrentes['123.454.345.90'] = [
    'titular' => 'Marcio',
    'saldo' => 100000
];


//executador:

/*echo "<ul>";

foreach ($contascorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeconta($conta);
}

echo "</ul>";*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes:</h1>

    <dl>
        <?php foreach($contascorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf;?></h3>
        </dt>
        <dd>
            Saldo: <?=$conta['saldo'];?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>