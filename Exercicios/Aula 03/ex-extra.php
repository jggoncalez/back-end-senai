<?php

// Entrada de dados
$var1 = readline(prompt: "Variável 1: ");
$var2 = readline(prompt: "Variável 2: ");


// Transforma string em numérico
if (is_numeric($var1)) {
    $num1 = $var1 + 0;
} else {
    $num1 = $var1;
}
if (is_numeric($var2)) {
    $num2 = $var2 + 0;
} else {
    $num2 = $var2;
}

// Transforma string em tipo boolean
if ($var1 == "true") {
    $num1 = true;
} elseif ($var2 == "false"){
    $num1 = false;
}
if ($var2 == "true") {
    $num2 = true;
} elseif ($var2 == "false"){
    $num2 = false;
}

// Procurar o tipo da variável
$tipoVar1 = gettype($num1);
$tipoVar2 = gettype($num2);

// Saída de dados
if ($tipoVar1 == $tipoVar2) {
    echo "Variáveis de tipos iguais! Primeiro valor do tipo $tipoVar1 e segundo valor do tipo $tipoVar2";
} else {
    echo "ERRO! Variáveis de tipos diferentes. Primeiro valor do tipo $tipoVar1 e segundo valor do tipo $tipoVar2";
}

?>