<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo) // MÉTODO __get = faz com que ao chamar um item diretamente no objeto, ele modifique a forma que será exibido ex: echo $teste->nome;
    {
        //Rua->recuperaRua
        $metodo = 'recupera'. ucfirst($nomeAtributo);// ucfirst() = Primeira letra maiuscula
        echo $this->$metodo();
    }
}