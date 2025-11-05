<?php

namespace aula14;

class Bebidas{

    private $cod;
    private $nome;
    private $categoria;
    private $volume;
    private $valor;
    private $qtt;
    public function __construct($qtt, $valor, $volume, $categoria, $nome, $cod)
    {
        $this->qtt = $qtt;
        $this->valor = $valor;
        $this->volume = $volume;
        $this->categoria = $categoria;
        $this->nome = $nome;
        $this->cod = $cod;
    }
    public function getCod(): int
    {
        return $this->cod;
    }

    public function setCod(int $cod): void
    {
        $this->cod = $cod;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function getQtt(): int
    {
        return $this->qtt;
    }

    public function setQtt(int $qtt): void
    {
        $this->qtt = $qtt;
    }

}