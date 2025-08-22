<?php

class Produtos{
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }
    public function produto_vendido($qtde_vendida){
        $this->qtde_estoque -= $qtde_vendida;
    }
}

$bolacha1 = new Produtos();
$bolacha1 -> nome = "Nikito";
$bolacha1 -> categoria = "Doces";
$bolacha1 -> qtde_estoque = 220;

$feijao1 = new Produtos();
$feijao1 -> nome = "Oliron";
$feijao1 -> categoria = "Mantimentos";
$feijao1 -> fornecedor = "Reserva nobre";
$feijao1 -> qtde_estoque = 123;