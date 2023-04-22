<?php

namespace Alura\Banco\Modelo;

// funcionario é uma pessoa
class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf); // utiliza o construtor da classe Pai, ou seja, a classe Pessoa
        $this->cargo = $cargo;
        $this->salario = $salario;
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

    public function recuperaSalario(): float
    {
        return $this-> salario;
    }

    public function calculaBonificacao(): float
    {
        return $this-> salario * 0.1;
    }
}
