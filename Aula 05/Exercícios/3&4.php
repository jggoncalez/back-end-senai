<?php

class Usuario {
    public string $nome;
    public string $cpf;
    public string $sexo;
    public string $email;
    public string $estadocivil;
    public string $estado;
    public string $endereco;
    public string $cep; public function __construct(string $nome, string $cpf, string $sexo, string $email, string $estadocivil, string $estado, string $endereco, string $cep) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estadocivil = $estadocivil;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }
    public function mostrar(){
        echo "Nome: {$this->nome}\nCPF: {$this->cpf}\nSexo: {$this->sexo}\nEmail: {$this->email}\nEstado Civil: {$this->estadocivil}\nEstado: {$this->estado}\nEndereço: {$this->endereco}\nCEP: {$this->cep}\n";
    }
}

$usuario1 = new Usuario(
    "Josenildo Afonso Souza",
    "100.200.300-40",
    "Masculino",
    "josenewdo.souza@gmail.com",
    "Casado",
    "Bahia",
    "Rua da amizade, 99",
    "40123-98"
);

$usuario2 = new Usuario(
    "Valentina Passos Scherrer",
    "070.070.060-70",
    "Feminino",
    "scherrer.valen@outlook.com",
    "Divorciada",
    "São Paulo",
    "Avenida da saudade, 1942",
    "23456-24"
);

$usuario3 = new Usuario(
    "Claudio Braz Nepumoceno",
    "575.575.242-32",
    "Masculino",
    "Clauclau.nepumoceno@gmail.com",
    "Solteiro",
    "Piauí",
    "Estrada 3, 33",
    "12345-99"
);

$usuario1->mostrar();
echo "\n";
$usuario2->mostrar();
echo "\n";
$usuario3->mostrar();
