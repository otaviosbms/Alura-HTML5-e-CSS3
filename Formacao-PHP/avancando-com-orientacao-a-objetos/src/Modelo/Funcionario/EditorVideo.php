<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculabonificacao(): float
    {
        return 600;
    }
}