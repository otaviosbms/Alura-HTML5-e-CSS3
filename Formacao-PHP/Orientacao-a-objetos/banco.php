<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular().PHP_EOL;
echo $primeiraConta->recuperarCpfTitular().PHP_EOL;
echo $primeiraConta->recuperarSaldo().PHP_EOL;

$segundaConta = new Conta('098.765.432-11', 'Patricia');
var_dump($segundaConta);

echo Conta::recuperarNumeroDeContas();