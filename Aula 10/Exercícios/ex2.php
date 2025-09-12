<?php

namespace Fazenda;

interface Animais {
    public function chamarAnimais();
}

class Cachorro implements Animais {
    public function chamarAnimais() {
        return "Au au";
    }
}

class Gato implements Animais {
    public function chamarAnimais() {
        return "Miau miau";
    }
}

class Vaca implements Animais {
    public function chamarAnimais() {
        return "Mu mu";
    }
}

// Exemplo de uso
$cachorro = new Cachorro();
echo "Cachorro: ". $cachorro->chamarAnimais() .  "\n";

$gato = new Gato();
echo "Gato: " . $gato->chamarAnimais() .  "\n";

$vaca = new Vaca();
echo "Vaca: " . $vaca->chamarAnimais() .  "\n";