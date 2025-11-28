<?php
namespace Controller;

use Model\Livros;
use Model\LivrosDAO;

class LivrosController
{
    private $livrosDAO;

    public function __construct($conn)
    {
        $this->livrosDAO = new LivrosDAO($conn);
    }

    public function criar($dados)
    {
        $livro = new Livros(
            null,
            isset($dados['titulo']) ? trim($dados['titulo']) : '',
            isset($dados['autor']) ? trim($dados['autor']) : '',
            isset($dados['ano_publicacao']) ? (int) $dados['ano_publicacao'] : 0,
            isset($dados['genero']) ? trim($dados['genero']) : '',
            isset($dados['qtt_disponivel']) ? (int) $dados['qtt_disponivel'] : 0
        );

        if ($this->livrosDAO->create($livro)) {
            return ['sucesso' => true, 'mensagem' => 'Livro cadastrado com sucesso!'];
        }
        
        return ['sucesso' => false, 'mensagem' => 'Erro ao cadastrar livro!'];
    }

    public function listarTodos()
    {
        return $this->livrosDAO->findAll();
    }

    public function buscarPorId($id)
    {
        return $this->livrosDAO->findById($id);
    }

    public function atualizar($id, $dados)
    {
        $livro = new Livros(
            $id,
            isset($dados['titulo']) ? trim($dados['titulo']) : '',
            isset($dados['autor']) ? trim($dados['autor']) : '',
            isset($dados['ano_publicacao']) ? (int) $dados['ano_publicacao'] : 0,
            isset($dados['genero']) ? trim($dados['genero']) : '',
            isset($dados['qtt_disponivel']) ? (int) $dados['qtt_disponivel'] : 0
        );

        if ($this->livrosDAO->update($livro)) {
            return ['sucesso' => true, 'mensagem' => 'Livro atualizado com sucesso!'];
        }
        
        return ['sucesso' => false, 'mensagem' => 'Erro ao atualizar livro!'];
    }

    public function excluir($id)
    {
        if ($this->livrosDAO->delete($id)) {
            return ['sucesso' => true, 'mensagem' => 'Livro excluído com sucesso!'];
        }
        
        return ['sucesso' => false, 'mensagem' => 'Erro ao excluir livro!'];
    }

    // Processo principal
    public function processarRequisicao()
    {
        $editarLivro = null;
        $resultado = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $acao = $_POST['acao'] ?? '';
            
            if ($acao === 'criar') {
                $resultado = $this->criar($_POST);
                if($resultado['sucesso']) {
                    header('Location: ' . $_SERVER['REQUEST_URI']);
                    exit;
                }
            }

            if ($acao === 'deletar') {
                $id = (int) $_POST['id'];
                $resultado = $this->excluir($id);
                if($resultado['sucesso']) {
                    header('Location: ' . $_SERVER['REQUEST_URI']);
                    exit;
                }
            }

            if ($acao === 'editar') {
                $id = (int) $_POST['id'];
                $editarLivro = $this->buscarPorId($id);
            }

            if ($acao === 'atualizar') {
                $id = (int) $_POST['id'];
                $resultado = $this->atualizar($id, $_POST);
                if($resultado['sucesso']) {
                    header('Location: ' . $_SERVER['REQUEST_URI']);
                    exit;
                }
            }
        }

        return [
            'editarLivro' => $editarLivro,
            'resultado' => $resultado,
            'livros' => $this->listarTodos()
        ];
    }
}
?>