<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{

    // atributos protected conseguem ser acessados de dentro de suas classes filhas

    use AcessoPropriedades;
    
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular) //final = significa que o método não pode ser sobreescrito em outra classe
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
