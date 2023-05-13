<?php

class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    public function recuperarNumero(): string
    {
        return $this->numero;
    }
}