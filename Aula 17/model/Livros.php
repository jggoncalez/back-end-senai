<?php
namespace Model;

// Classe que representa um Livro com seus atributos e métodos de acesso
class Livros
{
    private $ID_LIVROS;
    private $TITULO;
    private $AUTOR;
    private $ANO_PUBLICACAO;
    private $GENERO;
    private $QTT_DISPONIVEL;

    // Construtor para inicializar os atributos do livro
    public function __construct($ID_LIVROS, $TITULO, $AUTOR, $ANO_PUBLICACAO, $GENERO, $QTT_DISPONIVEL)
    {
        $this->ID_LIVROS = $ID_LIVROS;
        $this->TITULO = $TITULO;
        $this->AUTOR = $AUTOR;
        $this->ANO_PUBLICACAO = $ANO_PUBLICACAO;
        $this->GENERO = $GENERO;
        $this->QTT_DISPONIVEL = $QTT_DISPONIVEL;
    }

    // Getters
    public function getIdLivros()
    {
        return $this->ID_LIVROS;
    }
    public function getTitulo()
    {
        return $this->TITULO;
    }
    public function getAutor()
    {
        return $this->AUTOR;
    }
    public function getAnoPublicacao()
    {
        return $this->ANO_PUBLICACAO;
    }
    public function getGenero()
    {
        return $this->GENERO;
    }
    public function getQttDisponivel()
    {
        return $this->QTT_DISPONIVEL;
    }

    // Setters
    public function setIdLivros($ID_LIVROS)
    {
        $this->ID_LIVROS = $ID_LIVROS;
    }
    public function setTitulo($TITULO)
    {
        $this->TITULO = $TITULO;
    }
    public function setAutor($AUTOR)
    {
        $this->AUTOR = $AUTOR;
    }
    public function setAnoPublicacao($ANO_PUBLICACAO)
    {
        $this->ANO_PUBLICACAO = $ANO_PUBLICACAO;
    }
    public function setGenero($GENERO)
    {
        $this->GENERO = $GENERO;
    }
    public function setQttDisponivel($QTT_DISPONIVEL)
    {
        $this->QTT_DISPONIVEL = $QTT_DISPONIVEL;
    }
}
?>