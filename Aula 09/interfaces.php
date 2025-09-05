<?php
/*
namespace Aula09;

interface Pagamento {
    public function pagar($valor){
        echo "pagamento realizado!";
    }
}

class CartaoDeCredito implements Pagamento {
    public function pagar($valor){
        echo "Pagamento realizado com cartão de crédito, valor: $valor\n";
    }
}
class Pix implements Pagamento {
    public function pagar($valor){
        echo "Pagamento realizado via PIX, valor: $valor\n";
    }
}
*/
/*
___________________________________________________
| |                                             | |
| |          F   O   R   M   A   S              | |
|_|_____________________________________________|_|
| |                                             | |
| |                                             | |
*/
namespace Formas;

interface Forma {
    public function calcularArea($val1);
}

class Quadrado implements Forma{
    public function calcularArea($val1){
        echo $val1**2;
    }
}

class Circulo implements Forma{
    public function calcularArea($val1){
        echo $val1**2 * pi();
    }
}

class Pentagon implements Forma{
    public function calcularArea($val1){
        echo (5 * $val1**2) / (4 * tan(pi() / 5));
    }
}

$square = new Quadrado();
$circle = new Circulo();
$pentagon = new Pentagon();
$circle = new Circulo();

$ladoQuadrado = readline("Digite a medida do lado do quadrado: ");
$raioCirculo = readline("Digite o raio do círculo: ");
$circle->calcularArea($raioCirculo);

$ladoPentagono = readline("Digite a medida do lado do pentágono: ");
$pentagon->calcularArea($ladoPentagono);
$raioCirculo = readline("Digite o raio do círculo: ");
$circle->calcularArea($raioCirculo);
