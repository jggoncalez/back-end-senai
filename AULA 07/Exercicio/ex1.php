<?php
class Carro{
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo){
        $this -> setMarca($marca);
        $this -> setModelo($modelo);
    }

    public function setMarca($marca){
        $this ->marca = strtoupper($marca);
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setModelo($modelo){
        $this ->modelo = strtoupper($modelo);
    }
    public function getModelo(){
        return $this->modelo;
    }
}

$carro1 = new Carro("mazda", "fd rx 7");

echo $carro1 -> getMarca() . " " . $carro1 -> getModelo(); 