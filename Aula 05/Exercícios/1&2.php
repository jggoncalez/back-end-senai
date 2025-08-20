<?php

class Cachorro {
    public string $nome;
    public int $idade;
    public string $raca;
    public bool $castrado;
    public string $sexo;

    public function __construct($nome, $idade, $raca, $castrado, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }
    public function latir(){
        echo " /^-----^\
 V  o o  V
  |  Y  |
   \ Q /
   / - \
   |    \
   |     \     )
   || (___\====\n\n";
        if ($this->sexo == "masculino") {
            echo "{$this->nome} disse: WOOF WOOF!!!\n\n";
        } else{
            echo "{$this->nome} disse: AU AU!!!\n\n";
        }
    }
    public function mostrar() {
        echo "   |\|\ 
  ..    \       .
o--     \\    / @)
 v__///\\\\__/ @
   {           }
    {  } \\\{  }
    <_|      <_|\n";
        echo "Nome: {$this->nome}\n";
        echo "Idade: {$this->idade}\n";
        echo "Raça: {$this->raca}\n";
        echo "Castrado: " . ($this->castrado ? "Sim" : "Não") . "\n";
        echo "Sexo: {$this->sexo} \n\n";

    }
}

$cachorro1 = new Cachorro("Doge", 7, "Shiba Inu", true, "masculino");
$cachorro2 = new Cachorro("Luna", 3, "Labrador", false, "feminino");
$cachorro3 = new Cachorro("Max", 5, "Golden Retriever", true, "masculino");
$cachorro4 = new Cachorro("Bella", 2, "Poodle", false, "feminino");
$cachorro5 = new Cachorro("Charlie", 4, "Bulldog", true, "masculino");
$cachorro6 = new Cachorro("Lucy", 6, "Beagle", false, "feminino");
$cachorro7 = new Cachorro("Rocky", 8, "Rottweiler", true, "masculino");
$cachorro8 = new Cachorro("Molly", 1, "Dachshund", false, "feminino");
$cachorro9 = new Cachorro("Buddy", 3, "Boxer", true, "masculino");
$cachorro10 = new Cachorro("Daisy", 4, "Cocker Spaniel", false, "feminino");

$cachorro1->mostrar();
$cachorro1->latir();

$cachorro2->mostrar();
$cachorro2->latir();

$cachorro3->mostrar();
$cachorro3->latir();

$cachorro4->mostrar();
$cachorro4->latir();

$cachorro5->mostrar();
$cachorro5->latir();

$cachorro6->mostrar();
$cachorro6->latir();

$cachorro7->mostrar();
$cachorro7->latir();

$cachorro8->mostrar();
$cachorro8->latir();

$cachorro9->mostrar();
$cachorro9->latir();

$cachorro10->mostrar();
$cachorro10->latir();