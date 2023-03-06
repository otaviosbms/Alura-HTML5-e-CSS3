<?php

function geraEmail($nome): void
{
    $conteudoEmail = <<<FINAL
    olá, $nome!

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    FINAL;
    echo $conteudoEmail;
}

geraEmail('Otávio');