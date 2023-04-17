<?php

namespace Alura\Banco\Modelo;

// funcionario é uma pessoa
class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf); // utiliza o construtor da classe Pai, ou seja, a classe Pessoa
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}
