<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;


class Autenticador
{
    public function tantaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)){
            echo "ok. Usuário logado no sistema";
        }else{
            echo "Ops. senha incorreta.";
        }
    }
}