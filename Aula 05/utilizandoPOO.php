<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $N_Donos;

    public function __construct($marca, $modelo, $ano, $revisao, $N_Donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->N_Donos = $N_Donos;
    }

    public function mostrar() {
        echo "Marca: {$this->marca}\nModelo: {$this->modelo}\nAno: {$this->ano}\nRevisão: " . ($this->revisao ? "Sim" : "Não") . "\nNúmero de Donos: {$this->N_Donos}\n\n";
    }

    public function ligar() {
        echo "O carro {$this->marca} está ligado!\n";
    }
}

$carro1 = new Carro("Porsche", "911", "2020", false, 3);
$carro2 = new Carro("Mazda", "FD RX-7", "1994", false, 2);
$carro3 = new Carro("Ferrari", "F40", "1987", true, 1);
$carro4 = new Carro("Lamborghini", "Aventador", "2019", true, 2);
$carro5 = new Carro("Toyota", "Supra MK4", "1998", false, 4);
$carro6 = new Carro("Nissan", "Skyline GT-R R34", "1999", true, 3);

$carro1->mostrar();
$carro2->mostrar();
$carro3->mostrar();
$carro4->mostrar();
$carro5->mostrar();
$carro6->mostrar();

$carro2 ->ligar();