<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tantaLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)){
            echo "ok. Usuário logado no sistema";
        }else{
            echo "Ops. senha incorreta.";
        }
    }
}