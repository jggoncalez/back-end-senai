<?php

for ($i = 0; $i <= 5; $i++) {
    $opcao = readline("1- Olá\n2- Data Atual\n3- Sair\nOpção: ");
    switch ($opcao) {
        case 3:
            echo "Saindo...\n";
            break 2;
        default:
            null;
    }
}