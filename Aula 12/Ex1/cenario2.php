<?php

/*
Relacionamento: herança (Extends)
*/

namespace Cenario_2;

class Herois{
    protected string $nome;
    public function __construct($nome){
        $this->nome = $nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
}

class Treinamentos extends Herois{
    private string $treinamento;

    function treinar($treinamento): void
    {
        echo "Treinamento $treinamento realizado por {$this->getNome()}";
    }
}

class Doacoes extends Herois{
    private string $brinquedo;
    function doar($brinquedo): void
    {
        echo "Doação de $brinquedo realizado por {$this->getNome()}!";
    }
}