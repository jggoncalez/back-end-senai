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

class Square implements Forma{
    public function calcularArea($val1){
        echo $val1**2;
    }
}

class Circle implements Forma{
    public function calcularArea($val1){
        echo $val1**2 * pi();
    }
}

class Pentagon implements Forma{
    public function calcularArea($val1){
        echo (5 * $val1**2) / (4 * tan(pi() / 5));
    }
}
class Hexagon implements Forma{
    public function calcularArea($val1){
        echo ((3 * sqrt(3) * $val1**2)/2);
    }
}

$square = new Square();
$circle = new Circle();
$pentagon = new Pentagon();
$hexagon = new Hexagon();

$ladoQuadrado = readline("Digite a medida do lado do quadrado: ");
$raioCirculo = readline("Digite o raio do círculo: ");
$circle->calcularArea($raioCirculo);

$ladoPentagono = readline("Digite a medida do lado do pentágono: ");
$pentagon->calcularArea($ladoPentagono);

$ladoHexagono = readline("Digite a medida do lado do hexágono: ");
$hexagon->calcularArea($ladoHexagono);
