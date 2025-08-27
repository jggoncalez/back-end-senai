<?php
class Pessoa{
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;
    
    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha) {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTelefone($telefone);
        $this->setIdade($idade);
        $this->email = $email;
        $this->senha = $senha;
    }
    public function setNome($nome){
        $this->nome=ucwords(strtolower($nome));
    }
    public function getNome(){
        return $this->nome;
    }

    public function setCpf($cpf){
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setTelefone($telefone){
        $this->cpf = preg_replace('/\D/', '', $telefone);
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setIdade($idade){
        $this->idade = abs( (int) $idade);
    }
    
    public function getIdade() {
        return $this->idade;
    }
    public function exibirInfo(){
        return "Nome do aluno: {$this->getNome()}\n" .
               "CPF: {$this->getCpf()}\n" .
               "Telefone: {$this->getTelefone()}\n" .
               "Idade: {$this->getIdade()}\n" .
               "Email: {$this->email}\n" .
               "Senha: {$this->senha}";
    }
}

$aluno1 = new Pessoa("joAo gaBRIEL goNCAlez", "222.333.444-56", "(99)99999-9999", -99, "email@exemplo.com", "abc123");

echo $aluno1 -> exibirInfo();