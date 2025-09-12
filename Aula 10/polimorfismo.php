<?php

namespace Aula10;

interface Automoveis{
    public function mover();
}

class Carro implements Automoveis{
    public function mover(){
        echo "O carro está andando";
    }
}
class Aviao implements Automoveis{
    public function mover(){
        echo "O avião está voando";
    }
}
class Barco implements Automoveis{
    public function mover(){
        echo "O barco está velejando";
    }
}
class Elevador implements Automoveis{
    public function mover(){
        echo "O elevador está se movendo";
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