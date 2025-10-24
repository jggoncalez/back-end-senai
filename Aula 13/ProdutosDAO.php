<?php

namespace Aula13;

class ProdutosDAO{
    private $produtos = [];

    private $arquivo = 'produtos.json';

    public function __construct() {
        if(file_exists($this->arquivo)){
            $conteudo = json_decode(file_get_contents($this->arquivo), true);
            
            if($conteudo){
                foreach($conteudo as $data => $id){
                    $this -> produtos[$data] = new Produtos(
                        $id['codigo'],
                        $id['nome'],
                        $id['preco']
                    );
                }
            }
        }
    }

    public function salvarArquivo(){
        $dados = [];

        foreach ($this->produtos as $id => $produto) {
            $dados[$id] = [
                'id' => $produto->getCodigo(),
                'nome' => $produto->getNome(),
                'curso' => $produto->getPreco()
                ];
            }
            file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }

    public function addProdutos(Produtos $produto){
        $this->produtos[$produto->getCodigo()] = $produto;
        $this->salvarArquivo();
    }

    public function lerProdutos(){
        return $this->produtos;
    }

    public function atualizarProdutos($codigo, $novoNome, $novoPreco){
        if(isset($this->produtos[$codigo])) {
            $this -> produtos[$codigo] -> setNome($novoNome);
            $this -> produtos[$codigo] -> setPreco($novoPreco);
        }
        $this->salvarArquivo();
    }

    public function deletarProdutos($codigo){
        unset($this->produtos[$codigo]);
        $this->salvarArquivo();
    }
}