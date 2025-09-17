<?php
namespace Extra;

interface Movel{
    public function mover(){}
}
interface Abastecivel{
    public function abastecer($quantidade){

    }
}
interface Manutenivel{
    public function fazerManutencao(){}
}

class Carro implements Movel, Abastecivel{
    public function mover(){echo "O carro está se movimentando";}
    public function abastecer($quantidade){echo "Foi abastecido $quantidade litro(s)";}
}

class Bicicleta implements Movel, Manutenivel{
    public function mover(){echo "A bicicleta está pedalando";}
    public function fazerManutencao(){echo "A bicicleta foi lubrificada";}
}

class Onibus implements Movel, Abastecivel, Manutenivel{
    public function mover(){echo "O ônibus está transportando passageiros";}
    public function abastecer($quantidade){echo "Foi abastecido $quantidade litro(s)";}
    public function fazerManutencao(){echo "O ônibus está passando por revisão";}
}