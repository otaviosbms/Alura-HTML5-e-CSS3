<?php

$csv = ',.Vinicius Dias,24,.';

// \/ "APARA" (as pontas) a string removendo espaços por padrão, podendo também remover espaçoes denominados \/
echo trim($csv,',.').PHP_EOL;
// \/ "APARA" apenas o inicio da string \/
echo ltrim($csv,',.').PHP_EOL;
// \/ "APARA" apenas o final da string \/
echo rtrim($csv,',.').PHP_EOL;