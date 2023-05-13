<?php

class Titular
{

    private $cpf;
    private $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;

    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "O nome precisa ter no mínimo 5 caracteres.";
            exit();
        }
    }
}