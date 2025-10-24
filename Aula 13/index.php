<?php
namespace Aula13;

require_once "Produtos.php";
require_once "Produtos.php";

$dao = ProdutosDAO();

$dao -> addProdutos(new Produtos("1", "Tomate", 7.99));
$dao -> addProdutos(new Produtos("2", "Maçã", 7.99));
$dao -> addProdutos(new Produtos("3", "Queijo Brie", 7.99));
$dao -> addProdutos(new Produtos("4", "Iogurte Grego", 7.99));
$dao -> addProdutos(new Produtos("5", "Guaraná Jesus", 7.99));
?>