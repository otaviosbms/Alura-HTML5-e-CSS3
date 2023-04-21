<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{


    // caso um método de uma classe filha seja criado novamente utilzando o nome do metodo da classe pai, as função serão reescritas.

    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}