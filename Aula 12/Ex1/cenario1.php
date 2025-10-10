<?php

/*
Relacionamento: Realização (Interface)
*/

namespace Cenario_1;

interface Localidades {
    function comidasTipicas();
    function localParaNadar();
}

class Turista implements Localidades {
    private string $nome;
    private string $comida;
    private string $ondeNada;

    function __construct($nome, $comida, $ondeNada) {
        $this->nome = $nome;
        $this->comida = $comida;
        $this->ondeNada = $ondeNada;
    }

    public function comidasTipicas(): string
    {
        return "{$this->nome} está comendo {$this->comida}";
    }

    public function localParaNadar(): string
    {
        return "{$this->nome} está nadando no(a) {$this->ondeNada}";
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getComida() {
        return $this->comida;
    }

    public function setComida($comida) {
        $this->comida = $comida;
    }

    public function getOndeNada() {
        return $this->ondeNada;
    }

    public function setOndeNada($ondeNada) {
        $this->ondeNada = $ondeNada;
    }
}