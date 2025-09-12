<?php
namespace Formas;

interface Forma {
    public function calcularArea($val1, $val2);
}

class Square implements Forma{
    public function calcularArea($val1, $val2){
        echo $val1**2;
    }
}

class Rectangle implements Forma{
    public function calcularArea($val1, $val2){
        echo $val1 * $val2;
    }
}

class Circle implements Forma{
    public function calcularArea($val1, $val2){
        echo $val1**2 * pi();
    }
}


$square = new Square();
$rectangle = new Rectangle();
$circle = new Circle();

$square->calcularArea(10, 10);
echo "\n";
$rectangle->calcularArea(10, 20);
echo "\n";
$circle->calcularArea(2, 5);
