<?php

/*
Relacionamento: Herança (Extends)
*/

class Cinema{
    private string $filmeNome;
    private string $filmeAno;
    private string $filmeGenero;

    public function __construct(string $filmeNome, string $filmeAno, string $filmeGenero)
    {
        $this->filmeNome = $filmeNome;
        $this->filmeAno = $filmeAno;
        $this->filmeGenero = $filmeGenero;
    }

    public function getFilmeNome(): string
    {
        return $this->filmeNome;
    }

    public function setFilmeNome(string $filmeNome): void
    {
        $this->filmeNome = $filmeNome;
    }

    public function getFilmeAno(): string
    {
        return $this->filmeAno;
    }

    public function setFilmeAno(string $filmeAno): void
    {
        $this->filmeAno = $filmeAno;
    }

    public function getFilmeGenero(): string
    {
        return $this->filmeGenero;
    }

    public function setFilmeGenero(string $filmeGenero): void
    {
        $this->filmeGenero = $filmeGenero;
    }

}

class Ingresso extends Cinema{}{
    echo "Ingresso comprado! \n Filme: {$this->getFilmeNome()}\n Ano: {$this->getFilmeAno()}\n Genero: {$this->getFilmeGenero()}\n";
}