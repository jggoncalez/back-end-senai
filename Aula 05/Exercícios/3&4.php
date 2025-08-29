<?php

class Usuario {
    public string $nome;
    public string $cpf;
    public string $sexo;
    public string $email;
    public string $estadocivil;
    public int $idade;
    public string $estado;
    public string $endereco;
    public string $cep;

    public function __construct(
        string $nome,
        string $cpf,
        string $sexo,
        string $email,
        string $estadocivil,
        int $idade,
        string $estado,
        string $endereco,
        string $cep
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estadocivil = $estadocivil;
        $this->idade = $idade; 
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    public function mostrar(){
        echo "Nome: {$this->nome}\nCPF: {$this->cpf}\nSexo: {$this->sexo}\nEmail: {$this->email}\nEstado Civil: {$this->estadocivil}\nEstado: {$this->estado}\nIdade: {$this->idade}\nEndereço: {$this->endereco}\nCEP: {$this->cep}\n";
    }

    public function testandoReservista(){
        if ($this->sexo === "Masculino" && $this->idade >= 18) {
            echo "Apresente seu certificado de reservista do tiro de guerra!";
        } else {
            echo "Tudo certo!";
        }
    }
    public function casamento($anos_casado){
        if ($this->estadocivil == "casado"){
            echo "Parabéns pelo seu casamento de $anos_casado anos!";
        } else{
            echo "oloco";
        }
    }
}

$usuario1 = new Usuario(
    "Josenildo Afonso Souza",
    "100.200.300-40",
    "Masculino",
    "josenewdo.souza@gmail.com",
    "Casado",
    45,
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
    21,
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
    13,
    "Piauí",
    "Estrada 3, 33",
    "12345-99"
);

$usuario1->mostrar();
$usuario1->testandoReservista();
$usuario1->casamento(20);
echo "\n-----------------------------\n\n";

$usuario2->mostrar();
$usuario2->testandoReservista();
$usuario2->casamento(0);
echo "\n-----------------------------\n\n";

$usuario3->mostrar();
$usuario3->testandoReservista();
$usuario3->casamento(0);
echo "\n-----------------------------\n\n";