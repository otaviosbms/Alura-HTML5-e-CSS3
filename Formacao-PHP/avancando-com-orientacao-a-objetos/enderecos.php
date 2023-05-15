<?php


use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis','Bairro Qualquer','Minha Rua','51B');
$outroEndereco = new Endereco('Rio','Centro','uma Rua','50');


echo $umEndereco->rua;

exit();
echo $umEndereco . PHP_EOL;
echo $outroEndereco;