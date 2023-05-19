<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 * 
 * 
 * 
 */

final class Endereco
{

    use AcessoPropriedades; // copia o codigo do arquivo trait para dentro desta classe sem a necessidade de herdar de outra classe.

    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString():string // MÉTODO __toString = quando um objeto da classe é apenas chamado, este método tem a capacidade de formatar a mensagem, ex: echo $teste;
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

}
