<?php
    echo "Olá! \n";

    $nome = "João! \n";
    $idade = "19";
    $ano_atual = "2025";

    $data_nasc = $ano_atual-$idade;
    echo $nome, "você nasceu em: ", $data_nasc;

    /* 2. Dado uma frase "Programação em PHP." transforme-a em maiúscula, imprima, depois em minúscula e a imprima de novo. */
    $exerc2 = "Programacão em php";
    echo "\nFrase: ", $exerc2;
    
    $exerc2 = strtoupper($exerc2);
    echo "\nMaiúsculo: ", $exerc2;

    $exerc2 = strtolower($exerc2);
    echo "\nMinúsculo: ", $exerc2;

?>