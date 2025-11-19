<?php
$id = $_GET['ID_LIVROS'] ;

use Model\Livros;
use config\Database;

require_once '../config/Database.php';
require_once '../model/Livros.php';

$db = Database::getInstance();
$conn = $conn = $db->getConnection();

$livro = new Livros($conn);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $acao = $_POST['acao'] ?? null;
    if ($acao == 'editar'){
        $livro->TITULO = $_POST['new_titulo'];
        $livro->AUTOR = $_POST['new_autor'];
        $livro->ANO_PUBLICACAO = $_POST['new_ano_publicacao'];
        $livro->GENERO = $_POST['new_genero'];
        $livro->QTT_DISPONIVEL = $_POST['new_qtt_disponivel'];
        $livro->ID_LIVRO = $_POST['id'];
        $livro->update();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Editar</title>
</head>
<body>
    
</body>
</html>