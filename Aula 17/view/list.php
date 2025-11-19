<?php
require_once '../config/Database.php';
require_once '../model/Livros.php';

use config\Database;
use Model\Livros;

$db = Database::getInstance();
$conn = $db->getConnection();

$livro = new Livros($conn);
$stmt = $livro->list();
$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano</th>
                <th>Gênero</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dados as $livro) {
                echo "<tr>";
                echo "<td>{$livro['TITULO']}</td>";
                echo "<td>{$livro['AUTOR']}</td>";
                echo "<td>{$livro['ANO_PUBLICACAO']}</td>";
                echo "<td>{$livro['GENERO']}</td>";
                echo "<td>{$livro['QTT_DISPONIVEL']}</td>";
                echo "<td>
                        <button onclick=\"abrirModal('{$livro['TITULO']}', '{$livro['AUTOR']}', {$livro['ANO_PUBLICACAO']}, '{$livro['GENERO']}, '{$livro['QTT_DISPONIVEL']})\" class=\"btn-editar\">Editar</button>
                        <form action=\"\" method=\"POST\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"acao\" value=\"deletar\">
                            <input type=\"hidden\" name=\"id_livros\" value=\"{$livro['ID_LIVROS']}\">
                            <button type=\"submit\" class=\"btn-deletar\">Deletar</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>