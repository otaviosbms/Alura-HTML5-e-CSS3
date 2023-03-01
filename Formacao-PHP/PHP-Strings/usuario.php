<?php

$nome = 'Vinícius Dias';

$email = 'Vinícius@alura.com.br';

$senha =  'áéíóú';

// \/ strlen() diz o tamanho da string (baseado em bytes de memoria) \/

if (mb_strlen($senha) < 8){
    echo 'senha insegura'.PHP_EOL;
} 

$posicaoDoArroba = strpos($email, '@'); // strpos() busca um caractere na string

// \/ substr() verifica uma string dentro de uma string \/


// mbstring reconhece strings que utilizam mais de um byte EX: í, ã, Ô, etc 


$usuario = substr($email, 0,$posicaoDoArroba);

// \/ strtoupper() transforma os caracteres da string para CAIXA ALTA  (copiando a string)\/ 
// \/ strtolower() transforma os caracteres da string para CAIXA BAIXA  (copiando a string)\/ 
echo  mb_strtoupper($usuario).PHP_EOL;   
echo substr($email, $posicaoDoArroba +1 ).PHP_EOL;

// \/ explode() -> recebe dois parametros, o primeiro é o elemento 'serparador', e o segundo é a string que será dividida. Retornando um array 
list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: '.$nome.PHP_EOL;
echo 'Sobreome: '.$sobrenome.PHP_EOL;