<?php
class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function getEstoque() {
        return $this->estoque;
    }
}

$produto = new Produto("Notebook", 3500.00, 15);

// Exibindo os valores com os getters
echo "O produto " . $produto->getNome() . " custa R$ " . $produto->getPreco() . " e possui " . $produto->getEstoque() . " unidades em estoque.";