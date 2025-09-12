<?php

namespace Movendo;

interface Automoveis{
    public function mover();
}

class Carro implements Automoveis{
    public function mover(){
        echo "O carro está andando na estrada";
    }
}
class Aviao implements Automoveis{
    public function mover(){
        echo "O avião está voando no céu";
    }
}
class Barco implements Automoveis{
    public function mover(){
        echo "O barco está navegando no mar";
    }
}
class Elevador implements Automoveis{
    public function mover(){
        echo "O Elevador está correndo pelo prédio";
    }
}

$aviao1 = new Aviao();
$barco1 = new Barco();
$elevador1 = new Elevador();
$carro1 = new Carro();

$aviao1->mover();
echo "\n";
$barco1->mover();
echo "\n";
$elevador1->mover();
echo "\n";
$carro1->mover();