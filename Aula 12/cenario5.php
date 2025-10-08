<?php

Class Biblioteca{
    private string $nomeLivro;
    private string $autorLivro;
    private string $editorLivro;
    public function __construct($editorLivro, $autorLivro, $nomeLivro)
    {
        $this->editorLivro = $editorLivro;
        $this->autorLivro = $autorLivro;
        $this->nomeLivro = $nomeLivro;
    }

    public function getEditorLivro()
    {
        return $this->editorLivro;
    }

    public function setEditorLivro($editorLivro): void
    {
        $this->editorLivro = $editorLivro;
    }

    public function getAutorLivro()
    {
        return $this->autorLivro;
    }

    public function setAutorLivro($autorLivro): void
    {
        $this->autorLivro = $autorLivro;
    }

    public function getNomeLivro()
    {
        return $this->nomeLivro;
    }

    public function setNomeLivro($nomeLivro): void
    {
        $this->nomeLivro = $nomeLivro;
    }
}

class Emprestimo extends Biblioteca{
    public function emprestar(){
        echo "Empréstimo realizado\nLivro: {$this->getNomeLivro()}\nAutor: {$this->getAutorLivro()}\nEditora: {$this->getEditorLivro()}\n";
    }
}

