<?php
namespace Model;

use PDO;

class LivrosDAO
{
    private $conn;
    private $table = "LIVROS";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Insere um novo livro no banco de dados
    public function create(Livros $livro)
    {
        $query = "INSERT INTO " . $this->table . " 
                  (TITULO, AUTOR, ANO_PUBLICACAO, GENERO, QTT_DISPONIVEL) 
                  VALUES (:titulo, :autor, :ano_publicacao, :genero, :qtt_disponivel)";
        
        $stmt = $this->conn->prepare($query);

        $titulo = $livro->getTitulo();
        $autor = $livro->getAutor();
        $ano = $livro->getAnoPublicacao();
        $genero = $livro->getGenero();
        $qtt = $livro->getQttDisponivel();

        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':ano_publicacao', $ano);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':qtt_disponivel', $qtt);

        return $stmt->execute();
    }

    // Busca um livro pelo ID
    public function findById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE ID_LIVROS = :id LIMIT 1";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Livros(
                $row['ID_LIVROS'],
                $row['TITULO'],
                $row['AUTOR'],
                $row['ANO_PUBLICACAO'],
                $row['GENERO'],
                $row['QTT_DISPONIVEL']
            );
        }

        return null;
    }

    // Retorna todos os livros
    public function findAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $livros = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $livros[] = new Livros(
                $row['ID_LIVROS'],
                $row['TITULO'],
                $row['AUTOR'],
                $row['ANO_PUBLICACAO'],
                $row['GENERO'],
                $row['QTT_DISPONIVEL']
            );
        }

        return $livros;
    }

    // Atualiza um livro existente
    public function update(Livros $livro)
    {
        $query = "UPDATE " . $this->table . " SET
                  TITULO = :titulo, 
                  AUTOR = :autor,
                  ANO_PUBLICACAO = :ano_publicacao,
                  GENERO = :genero,
                  QTT_DISPONIVEL = :qtt_disponivel
                  WHERE ID_LIVROS = :id";
        
        $stmt = $this->conn->prepare($query);

        $titulo = $livro->getTitulo();
        $autor = $livro->getAutor();
        $ano = $livro->getAnoPublicacao();
        $genero = $livro->getGenero();
        $qtt = $livro->getQttDisponivel();
        $id = $livro->getIdLivros();

        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':ano_publicacao', $ano);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':qtt_disponivel', $qtt);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    // Deleta um livro pelo ID
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE ID_LIVROS = :id";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}
?>