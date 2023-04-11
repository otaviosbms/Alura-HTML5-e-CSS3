<?php

//titular é uma pessoa
class Titular extends Pessoa // extends : clona uma classe já existente podendo realizar alterações 
{

    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf); // utiliza o construtor da classe Pai, ou seja, a classe Pessoa.
        $this -> endereco = $endereco;
    }



    public function recuperaEndereco(): Endereco
    {
        return $this-> endereco;
    }
}
