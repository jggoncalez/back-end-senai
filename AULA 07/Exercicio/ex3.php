<?php
class Aluno{
    private $nome;
    private  $nota;

    public function __construct($nome, $nota){
        $this -> setNome($nome);
        $this -> setNota($nota);
    }

    public function setNome($nome){
        $this ->nome = ucwords(strtolower($nome));
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNota($nota){
        if ($nota < 0 || $nota > 10) {
            $nota = 0;
        }

        $this -> nota = $nota;
    }
    public function getNota(){
        return $this->nota;
    }
}

$aluno1 = new Aluno("José", 11);
$aluno2 = new Aluno("Carlos", 9);

echo $aluno1 -> getNome() . " -> " . $aluno1 -> getNota() . "\n";
echo $aluno2 -> getNome() . " -> " . $aluno2 -> getNota(); 