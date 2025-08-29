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

    public function marcarTerritório(){
        echo "               ;~~,__
:-....,-------'`-'._.'
`-,,,  ,       ,'~~'
    ; ,'~.__; /--.
    :| :|   :|``(;
    `-'`-'  `-'
O cachorro {$this->nome} está marcando território!";
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

$cachorros = [$cachorro1, $cachorro2, $cachorro3, $cachorro4, $cachorro5, $cachorro6, $cachorro7, $cachorro8, $cachorro9, $cachorro10];

foreach ($cachorros as $cachorro) {
    $cachorro->mostrar();
    $cachorro->latir();
    $cachorro->marcarTerritório();
    echo "\n-----------------------------\n\n";
}