<?php
namespace Aula13;

require_once "Produtos.php";
require_once "ProdutosDAO.php";

$dao = new ProdutosDAO();

$dao -> addProdutos(new Produtos("1", "Tomate", 5.99));
$dao -> addProdutos(new Produtos("2", "Maçã", 6.49));
$dao -> addProdutos(new Produtos("3", "Queijo Brie", 34.99));
$dao -> addProdutos(new Produtos("4", "Iogurte Grego", 8.99));
$dao -> addProdutos(new Produtos("5", "Guaraná Jesus", 7.49));
$dao -> addProdutos(new Produtos("6", "Bolacha Bono", 4.99));
$dao -> addProdutos(new Produtos("7", "Desinfetante Urca", 3.99));
$dao -> addProdutos(new Produtos("8", "Prestobarba Bic", 12.99));

//READ
echo "Listagem inicial";
foreach($dao->lerProdutos() as $produto){
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}";
}

// UPDATE
$dao -> atualizarProdutos("7", "Desinfetante Barbarex", 3.99);
$dao -> atualizarProdutos("5", "Guaraná Jesus", 8.49);
$dao -> atualizarProdutos("8", "Prestobarba Bic", 12.99);

// DELETE
$dao ->deletarProdutos(1);
$dao ->deletarProdutos(2);

//READ
echo "Listagem final";
foreach($dao->lerProdutos() as $produto){
    echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()}";
}