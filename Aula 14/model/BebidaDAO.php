<?php

namespace aula14;
class BebidaDAO
{
    public array $bebidas = [];
    public string $file = '../bebidas.json';

    public function __construct()
    {
        if(file_exists($this->file)){
            $content = json_decode(file_get_contents(($this->file), true));

            if($content){
                foreach($content as $data => $p){
                    $this -> bebidas[$data] = new Bebidas(
                        $p['cod'],
                        $p['nome'],
                        $p['categoria'],
                        $p['volume'],
                        $p['valor'],
                        $p['qtt']
                    );
                }
            }
        }
    }
    public function saveFile(): void{
        $temp_data = [];
        foreach($this->bebidas as $data => $p){
            $temp_data[$p] = [
                'nome' => $p -> getNome(),
                'categoria' => $p -> getCategoria(),
                'volume' => $p -> getVolume(),
                'valor' => $p -> getValor(),
                'qtt' => $p -> getQtt()
            ];
        }
        file_put_contents($this -> file, json_encode($temp_data, JSON_PRETTY_PRINT));
    }

    public function addProducts(Bebidas $bebidas): void{
        $this -> bebidas[$bebidas -> getCod()] = $bebidas;
        $this ->saveFile();
    }

    public function readProducts(): array{
        return $this -> bebidas;
    }

    public function updateProducts(int $cod, int $newqtt, float $newvalor, int $newvolume, string $newcategoria, string $newnome): void{
        if(isset($this->bebidas[$cod])) {
            $this -> bebidas[$cod] -> setNome($newnome);
            $this -> bebidas[$cod] -> setQtt($newqtt);
            $this -> bebidas[$cod] -> setValor($newvalor);
            $this -> bebidas[$cod] -> setVolume($newvolume);
            $this -> bebidas[$cod] -> setCategoria($newcategoria);
        }
        $this->saveFile();
    }

    public function deleteProducts($cod): void{
        unset($this -> bebidas[$cod]);
        $this ->saveFile();
    }
}