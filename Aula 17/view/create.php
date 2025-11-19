<?php 
use Model\Livros;
use config\Database;

require_once '../config/Database.php';
require_once '../model/Livros.php';

$db = Database::getInstance();
$conn = $conn = $db->getConnection();

$livro = new Livros($conn);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $acao = $_POST['acao'] ?? null;
    if ($acao == 'criar'){
        $livro->TITULO = $_POST['titulo'];
        $livro->AUTOR = $_POST['autor'];
        $livro->ANO_PUBLICACAO = $_POST['ano_publicacao'];
        $livro->GENERO = $_POST['genero'];
        $livro->QTT_DISPONIVEL = $_POST['qtt_disponivel'];
        $livro->create();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Criar</title>
</head>
<body>
    <main>
        <h1>Formulário de criação</h1>
        <form action="" method="post">
            <label>Nome:</label>
            <input name="titulo" type="text" required>
            
            <label>Autor:</label>
            <input name="autor" type="text" required>
            
            <label>Ano de Publicação:</label>
            <input name="ano_publicacao" type=""date" required>
            
            <label>Gênero:</label>
            <input name="genero" type="text" required>
    
            <label>Quantidade Disponível:</label>
            <input name="qtt_disponivel" type="number" required>

            <button type="submit" name="acao" value="criar">Enviar</button>
        </form>
    </main>
</body>
</html>