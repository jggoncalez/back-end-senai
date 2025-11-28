<?php 
use Controller\LivrosController;
use config\Connection;

require_once '../config/Connection.php';
require_once '../model/Livros.php';
require_once '../model/LivrosDAO.php';
require_once '../controller/LivrosController.php';

$conn = Connection::getInstance();
$controller = new LivrosController($conn);

$dados = $controller->processarRequisicao();
$editarLivro = $dados['editarLivro'];
$resultado = $dados['resultado'];
$livros = $dados['livros'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca - v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header">
        Sistema de Gerenciamento de Biblioteca v1.0
    </div>

    <div class="toolbar">
        <button class="btn" onclick="openModal('modalCriar')">
            <strong>+</strong> Novo Livro
        </button>
        <button class="btn" onclick="window.location.reload()">
            🔄 Atualizar
        </button>
        
        <div class="search-container">
            <span class="search-label">🔍 Pesquisar:</span>
            <input type="text" 
                   class="search-box" 
                   id="searchInput" 
                   placeholder="Digite título, autor ou gênero..."
                   onkeyup="filtrarTabela()">
        </div>
    </div>

    <div class="content">
        <table>
            <thead>
                <tr>
                    <th width="50">ID</th>
                    <th>Título</th>
                    <th width="150">Autor</th>
                    <th width="80">Ano</th>
                    <th width="120">Gênero</th>
                    <th width="80">Qtd.</th>
                    <th width="150">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($livros)): ?>
                    <?php foreach ($livros as $livro): ?>
                        <tr>
                            <td><?= $livro->getIdLivros() ?></td>
                            <td><?= htmlspecialchars($livro->getTitulo()) ?></td>
                            <td><?= htmlspecialchars($livro->getAutor()) ?></td>
                            <td><?= $livro->getAnoPublicacao() ?></td>
                            <td><?= htmlspecialchars($livro->getGenero()) ?></td>
                            <td><?= $livro->getQttDisponivel() ?></td>
                            <td>
                                <button class="link-button" onclick='openEditModal(<?= json_encode([
                                    "id" => $livro->getIdLivros(),
                                    "titulo" => $livro->getTitulo(),
                                    "autor" => $livro->getAutor(),
                                    "ano" => $livro->getAnoPublicacao(),
                                    "genero" => $livro->getGenero(),
                                    "qtd" => $livro->getQttDisponivel()
                                ]) ?>)'>Editar</button>
                                |
                                <button class="link-button" onclick="deletarLivro(<?= $livro->getIdLivros() ?>, '<?= htmlspecialchars($livro->getTitulo(), ENT_QUOTES) ?>')">Deletar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 20px; color: #666;">
                            Nenhum livro cadastrado no sistema.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="status-bar">
        Total de livros: <strong><?= count($livros) ?></strong> | Sistema operacional
    </div>
</div>

<!-- Modal Criar -->
<div id="modalCriar" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" onclick="closeModal('modalCriar')">&times;</span>
            Novo Livro
        </div>
        <form method="POST" onsubmit="handleCriar(event)">
            <div class="modal-body">
                <input type="hidden" name="acao" value="criar">
                
                <label>Título:</label>
                <input type="text" name="titulo" required>

                <label>Autor:</label>
                <input type="text" name="autor" required>

                <label>Ano de Publicação:</label>
                <input type="number" name="ano_publicacao" max="2025" min="0" required>

                <label>Gênero:</label>
                <input type="text" name="genero" required>

                <label>Quantidade Disponível:</label>
                <input type="number" name="qtt_disponivel" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeModal('modalCriar')">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Editar -->
<div id="modalEditar" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" onclick="closeModal('modalEditar')">&times;</span>
            Editar Livro
        </div>
        <form method="POST" onsubmit="handleEditar(event)">
            <div class="modal-body">
                <input type="hidden" name="acao" value="atualizar">
                <input type="hidden" name="id" id="edit_id">
                
                <label>Título:</label>
                <input type="text" name="titulo" id="edit_titulo" required>

                <label>Autor:</label>
                <input type="text" name="autor" id="edit_autor" required>

                <label>Ano de Publicação:</label>
                <input type="number" name="ano_publicacao" id="edit_ano" max="2025" min="0" required>

                <label>Gênero:</label>
                <input type="text" name="genero" id="edit_genero" required>

                <label>Quantidade Disponível:</label>
                <input type="number" name="qtt_disponivel" id="edit_qtd" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" onclick="closeModal('modalEditar')">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>
    </div>
</div>

<!-- Form invisível para deletar -->
<form id="formDeletar" method="POST" style="display: none;">
    <input type="hidden" name="acao" value="deletar">
    <input type="hidden" name="id" id="delete_id">
</form>

<!-- Toast Container -->
<div id="toast" class="toast">
    <div class="toast-header">
        <span>📢 Sistema de Biblioteca</span>
    </div>
    <div class="toast-body">
        <span id="toast-message"></span>
    </div>
</div>

<script>
function showToast(message, type = 'sucesso') {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');
    
    toast.classList.remove('sucesso', 'erro');
    toast.classList.add(type);
    toastMessage.textContent = message;
    toast.classList.add('show');
    
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

function openModal(id) {
    document.getElementById(id).style.display = "block";
}

function closeModal(id) {
    document.getElementById(id).style.display = "none";
}

function openEditModal(livro) {
    document.getElementById('edit_id').value = livro.id;
    document.getElementById('edit_titulo').value = livro.titulo;
    document.getElementById('edit_autor').value = livro.autor;
    document.getElementById('edit_ano').value = livro.ano;
    document.getElementById('edit_genero').value = livro.genero;
    document.getElementById('edit_qtd').value = livro.qtd;
    openModal('modalEditar');
}

function handleCriar(event) {
    event.preventDefault();
    showToast('Livro cadastrado com sucesso!', 'sucesso');
    setTimeout(() => {
        event.target.submit();
    }, 500);
    return false;
}

function handleEditar(event) {
    event.preventDefault();
    showToast('Livro editado com sucesso!', 'sucesso');
    setTimeout(() => {
        event.target.submit();
    }, 500);
    return false;
}

function deletarLivro(id, titulo) {
    if (confirm('Tem certeza que deseja deletar o livro "' + titulo + '"?')) {
        document.getElementById('delete_id').value = id;
        showToast('Livro deletado com sucesso!', 'sucesso');
        setTimeout(() => {
            document.getElementById('formDeletar').submit();
        }, 500);
    }
}

// Pesqusa
function filtrarTabela() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const table = document.querySelector('table tbody');
    const rows = table.getElementsByTagName('tr');
    
    let contador = 0;
    
    for (let i = 0; i < rows.length; i++) {
        const row = rows[i];
        
        // Pula a linha de "nenhum livro cadastrado"
        if (row.cells.length === 1) continue;
        
        const titulo = row.cells[1].textContent.toLowerCase();
        const autor = row.cells[2].textContent.toLowerCase();
        const genero = row.cells[4].textContent.toLowerCase();
        
        // Busca em título, autor ou gênero
        if (titulo.includes(filter) || autor.includes(filter) || genero.includes(filter)) {
            row.style.display = '';
            contador++;
        } else {
            row.style.display = 'none';
        }
    }
    
    // Atualiza contador na barra de status
    atualizarContador(contador);
}

function atualizarContador(total) {
    const statusBar = document.querySelector('.status-bar');
    statusBar.innerHTML = `Total de livros: <strong>${total}</strong> | Sistema operacional`;
}

<?php if ($resultado): ?>
window.onload = function() {
    showToast('<?= addslashes($resultado["mensagem"]) ?>', '<?= $resultado["sucesso"] ? "sucesso" : "erro" ?>');
}
<?php endif; ?>
</script>

</body>
</html>