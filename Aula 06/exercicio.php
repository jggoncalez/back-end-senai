<?php

class Produtos{
    public int $prodCod;
    public string $prodName;
    public int $qtde;
    public $prodValidade;

    public function venderProduto($qtd_vend){
        $this->qtde -= $qtd_vend;
    }
}

$sazon = new Produtos();
$sazon->prodCod = "40001212";
$sazon->prodName = "Sazon Carne";
$sazon->qtde = 20;
$sazon->prodValidade = "27/09/2025";

$hondashi = new Produtos();
$hondashi->prodCod = "40004567";
$hondashi->prodName = "Hondashi";
$hondashi->qtde = 15;
$hondashi->prodValidade = "15/03/2024";

$ajinomoto = new Produtos();
$ajinomoto->prodCod = "40007890";
$ajinomoto->prodName = "Ajisal";
$ajinomoto->qtde = 30;
$ajinomoto->prodValidade = "10/12/2026";
