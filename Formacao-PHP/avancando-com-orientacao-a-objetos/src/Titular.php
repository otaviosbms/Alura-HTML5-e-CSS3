<?php

class Titular extends Pessoa // extends : clona uma classe já existente podendo realizar alterações 
{

    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this -> endereco = $endereco;
    }



    public function recuperaEndereco(): Endereco
    {
        return $this-> endereco;
    }
}
