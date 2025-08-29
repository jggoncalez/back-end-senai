<?php
class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }
}

$funcionario = new Funcionario("João", 4500.00);


echo "O funcionário " . $funcionario->getNome() . " tem um salário de R$ " . $funcionario->getSalario() . ".\n";

$funcionario->setNome("Marcelo G");
$funcionario->setSalario(10000);

echo "O funcionário " . $funcionario->getNome() . " tem um salário de R$ " . $funcionario->getSalario() . ".\n";