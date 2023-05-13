<?php

// interface = classe abstrata com todos os métodos abstratos.
// interfaces podem ser implementadas quantas forem possiveis em uma classe, já as classes abstratas
// podem ser utilizadas apenas uma vez por classe com extends

namespace Alura\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha):bool;
}