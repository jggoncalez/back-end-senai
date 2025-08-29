<?php
class Pessoa{
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email){
        $this -> setNome($nome);
        $this -> setIdade($idade);
        $this -> setEmail($email);
    }

    public function setNome($nome){
        $this ->nome = ucwords(strtolower($nome));
    }
    public function getNome(){
        return $this->nome;
    }
    public function setIdade($idade){
        $this ->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setEmail($email){
        $this ->email = strtolower($email);
    }
    public function getEmail(){
        return $this->email;
    }
}

$pessoa1 = new Pessoa("samuel", "22", "samuel@exemplo.com");

echo "O nome é " . $pessoa1 -> getNome() . ", tem " . $pessoa1 -> getIdade() . " anos e o email é " . $pessoa1 -> getEmail();