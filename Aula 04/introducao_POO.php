<?php
    $modelo_carro1 = "versa";
    $marca_carro1 = "nissan";
    $ano_carro1 = 2020;
    $revisao_carro1 = true;
    $ndonos_carro1 = 2;

    $modelo_carro2 = "m5";
    $marca_carro2 = "bmw";
    $ano_carro2 = 2018;
    $revisao_carro2 = false;
    $ndonos_carro2 = 2;

    $modelo_carro3 = "911";
    $marca_carro3 = "porsche";
    $ano_carro3 = 2026;
    $revisao_carro3 = false;
    $ndonos_carro3 = 1;

    $modelo_carro4 = "Dolphin";
    $marca_carro4 = "BYD";
    $ano_carro4 = 2023;
    $revisao_carro4 = false;
    $ndonos_carro4 = 1;

    function passouRevisao ($revisao) {
        $revisao=false;
        return $revisao;
    }
    
    $revisao_carro4 = passouRevisao( $revisao);

    function novoDono($donos) {
        return $donos + 1;
    }

    $ndonos_carro4 = novoDono($ndonos_carro4);