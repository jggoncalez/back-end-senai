<?php
    namespace Model;

    use PDO;
    class Livros{
        // Conexão
        private $conn;
        private $table = "LIVROS";

        public $ID_LIVROS;
        public $TITULO;
        public $AUTOR;
        public $ANO_PUBLICACAO;
        public $GENERO;
        public $QTT_DISPONIVEL;

        public function __construct($db){
            $this -> conn = $db;
        }


        public function create(){
            $query = "INSERT INTO " . $this->table . " (TITULO, AUTOR, ANO_PUBLICACAO, GENERO, QTT_DISPONIVEL) VALUES (:titulo, :autor, :ano_publicacao, :genero, :qtt_disponivel)";
            $stmt = $this->conn->prepare($query);

            $stmt -> bindParam(':titulo', $this->TITULO);
            $stmt -> bindParam(':autor', $this->AUTOR);
            $stmt -> bindParam(':ano_publicacao', $this->ANO_PUBLICACAO);
            $stmt -> bindParam(':genero', $this->GENERO);
            $stmt -> bindParam(':qtt_disponivel', $this->QTT_DISPONIVEL);

            $stmt -> execute();
            return $stmt;
        }

        public function searchID() {
            $query = "SELECT * FROM " . $this->table . "WHERE clienteID = :clienteID LIMIT 1";

            $stmt = $this -> conn -> prepare($query);
            $stmt -> bindParam(':clienteID', $this->ID_LIVROS);
            $stmt -> execute();

            $row = $stmt -> fetch(PDO::FETCH_ASSOC);

            if($row) {
                $this->clienteNome = $row['clienteNome'];
                return true;
        }

        return false;
    }

        public function list(){
            $query = "SELECT * FROM " .  $this->table;
            $stmt = $this->conn->prepare($query);
            
            $stmt -> execute();

            return $stmt;
        }

        public function update(){
            $query = "UPDATE {$this->table} SET
                TITULO = :titulo, 
                AUTOR = :autor,
                ANO_PUBLICACAO = :ano_publicacao,
                GENERO = :genero,
                QTT_DISPONIVEL = :qtt_disponivel
                WHERE ID_LIVROS = :id_livros";
            $stmt = $this->conn->prepare($query);
            
            $stmt -> bindParam(':titulo', $this->TITULO);
            $stmt -> bindParam(':autor', $this->AUTOR);
            $stmt -> bindParam(':ano_publicacao', $this->ANO_PUBLICACAO);
            $stmt -> bindParam(':genero', $this->GENERO);
            $stmt -> bindParam(':qtt_disponivel', $this->QTT_DISPONIVEL);
            $stmt -> bindParam(':id_livros', $this->ID_LIVROS);
            
            $stmt->execute();

            return $stmt;
        }

        public function delete(){
            $query = "DELETE FROM " . $this -> table . " WHERE ID_LIVROS = :id_livros";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':id_livros', $this->ID_LIVROS);

            $stmt -> execute();

            return $stmt;
        }
        
    }
