<?php

namespace Aula12;

require_once "CRUD.php";
require_once "AlunoDAO.php";

// Objeto da classe AlunoDAO para gerenciar os métodos do CRUD
$dao = new AlunoDAO();

//CREATE
$dao -> criarAluno(new Aluno(1, "Maria", "Design"));
$dao -> criarAluno(new Aluno(2, "Gabriel", "Moda"));
$dao -> criarAluno(new Aluno(3, "Eduardo", "Manicure"));
$dao -> criarAluno(new Aluno(4, "Aurora", "Arquitetura"));
$dao -> criarAluno(new Aluno(5, "Oliver", "Diretor"));
$dao -> criarAluno(new Aluno(6, "Geysa", "Engenheira"));
$dao -> criarAluno(new Aluno(7, "Amanda", "Lutadora"));
$dao -> criarAluno(new Aluno(8, "João", "Professor"));
$dao -> criarAluno(new Aluno(9, "Bernardo", "Streamer"));



//READ
echo "Listagem Inicial\n";
foreach($dao->lerAluno() as $aluno){
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}

// UPDATE
$dao->atualizarAluno(3, "Viviane", "Eletricista");
$dao->atualizarAluno(6, "Clotilde", "Engenheira");
$dao->atualizarAluno(8, "Joana", "Eletricista");
$dao->atualizarAluno(9, "Bernardo", "Dev");
$dao->atualizarAluno(7, "Amanda", "Logística");
$dao->atualizarAluno(5, "Oliver", "Elétrica");

// READ

echo "\nApós atualização: \n";
foreach($dao->lerAluno() as $aluno){
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}

// Delete

$dao ->excluirAluno(2);
$dao ->excluirAluno(6);
$dao ->excluirAluno(4);


echo "\nApós exclusão:\n";
foreach ($dao->lerAluno() as $aluno){
    echo "{$aluno->getId()} - {$aluno ->getNome()} - {$aluno->getCurso()} \n";
}
