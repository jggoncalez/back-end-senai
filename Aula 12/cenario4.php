<?php

namespace Cenario_4;

class Pessoas{
    protected string $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function acao(): void
    {
        echo "{$this->getNome()} está fazendo algo...";
    }

}

class Ajudar extends Pessoas {
    public function engravidar(): void{
        echo "{$this->getNome()} engravidou";
    }
    public function nascer(): void{
        echo "{$this->getNome()} nasceu";
    }
    public function crescer(): void {
        echo "{$this->getNome()} cresceu";
    }
    public function fazerEscolhas(): void {
        echo "{$this->getNome()} está fazendo escolhas";
    }
    public function doarSangue(): void {
        echo "{$this->getNome()} doou sangue para ajudar outras pessoas";
    }

}
