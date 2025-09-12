<?php

namespace Calculos;

interface Calculadora {
    public function calcular($valores);
}

class Soma implements Calculadora {
    public function calcular($valores) {
        echo $valores[0] + $valores[1] + $valores[2];
    }
}

$digit = readline(prompt: "Digite os valores separados por espaço: ");

$valores = explode(" ", $digit);

switch (count($valores)) {
    case 2:
        $valores[] = "0";
        break;
    case 3:
        break;
    default:
        echo "Quantidade de valores incorreta, digite apenas 2 ou 3 valores separados por espaço";
        exit;
}
$soma = new Soma();
$soma->calcular($valores);