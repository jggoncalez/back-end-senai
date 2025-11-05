<?php

namespace aula14;

require_once '../controller/BebidaController.php';
$controller = new BebidaController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $acao = $_POST['acao'] ?? null;
    if ($acao == 'criar'){
        $controller->criar(
            $_POST['cod'],
            $_POST['nome'],
            $_POST['categoria'],
            $_POST['volume'],
            $_POST['valor'],
            $_POST['qtt']
        );
    } else if ($acao === 'deletar'){
        $controller->excluir($_POST['nome']);
    }
}

?>

<main>
    <h1>Formulário de cadastro de bebidas</h1>
    <form action="" method="POST">
        <input type="hidden" name="acao" value="criar">
        <label for="">Código:</label>
        <input type="number" name="cod" required>
        <label for="">Nome:</label>
        <input type="text" name="nome" required>
        <label for="cat">Categoria:</label>
        <select name="categoria" id="cat" required>
            <option value="">Selecione uma categoria</option>
            <option value="cerveja">Cerveja</option>
            <option value="vinho">Vinho</option>
            <option value="destilado">Destilado</option>
            <option value="refrigerante">Refrigerante</option>
            <option value="suco">Suco</option>
            <option value="agua">Água</option>
        </select>

        <label for="">Volume:</label>
        <input type="number" name="volume" step="0.01" required>

        <label for="">Valor:</label>
        <input type="number" name="valor" step="0.01" required>

        <label for="">Quantidade:</label>
        <input type="number" name="qtt" required>
        <button type="submit">Cadastrar</button>
    </form>
</main>


