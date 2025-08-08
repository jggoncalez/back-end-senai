<?php

echo "Boa Tarde \n";

$nome_aluno = readline("Digite o nome do Aluno: \n");
$nota1 = readline("Digite a 1ª nota: \n");
$nota2 = readline("Digite a 2ª nota do aluno: \n");
$presenca = readline("Digite a presença (em %): \n");
$media = ($nota1 + $nota2)/2;


if ($nome_aluno == "Enzo Enrico"){
    echo "Aprovado!";
} else{
    if ($presenca >= 75) {
        if ($media > 10) {
            echo "Erro, média acima do permitido!!! Média:  \n", $media;
        } elseif ($media > 8) {
            echo "Média excelente! Média: ", $media;
        } elseif ($media > 6) {
            echo "Boa! Média: ", $media;
        } elseif ($media > 4) {
            echo "Hmmm... quase. Média: ", $media; 
        } elseif ($media > 2) {
            echo "Vixe, aí não deu certo! Média: ", $media;
        } else {
            echo "Você está no bico do corvo! Média: ", $media;
        }
    } else {
        echo "Presença baixa! Reprovado!!!";
    }
}
?>