<?php

/*
Relacionamento: Herança (Extends)
*/


namespace Cenario_3;

class Pessoas
{
    protected string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function acao(): void{
        echo "{$this->getNome()} está fazendo algo...";
    }

}

class Chuva extends Pessoas{
    public function acao(): void
    {
        echo "{$this->getNome()} está superando suas dificuldades";
    }
}

class Celebracao extends Pessoas{
    public function acao(): void{
        echo "{$this->getNome()} está celebrando!";
    }
}