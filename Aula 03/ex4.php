<?php
$num1 = readline(prompt: "1º Número: ");
$num2 = readline(prompt: "1º Número: ");
$operador = readline(prompt: "Operador (+, -, /, *): ");

switch($operador) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Erro: Divisão por zero";
        }
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    default:
        $result = "Operador inválido";
        break;
}

echo "$num1 $operador $num2 = ";