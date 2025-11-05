<?php
namespace aula14;

require_once '../model/BebidaDAO.php';
require_once '../model/Bebidas.php';

class BebidaController
{
    private $dao;

    public function __construct(){
        $this->dao = new BebidaDAO();
    }

    public function ler(): array{
        return $this->dao->lerBebida();
    }

    public function criar($nome, $categoria, $volume, $valor, $qtt, $cod): void{
        $bebidas = new Bebidas($nome, $categoria, $volume, $valor, $qtt, $cod);
        $this -> dao -> criarBebida($bebidas);
    }

    public function excluir($cod): void{
        $this -> dao -> excluirBebida($cod);
    }
}