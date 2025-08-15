<?php
function semiNovo($ano){
    return (date("y") - $ano <= 3)? true : false;
}

function precisaRevisao($revisao, $ano){
    return $revisao? 'Não' : (($ano < (date("y") - 3))? 'Sim' : 'Não');
}

function valEstimado($marca, $ano, $nDonos){
    switch($marca){
        case "bmw":
            $valorBase = 300000;
            break;
        case "porsche":
            $valorBase = 300000;
            break;
        case "nissan":
            $valorBase = 70000;
            break;
        case "byd":
            $valorBase = 150000;
            break;
    }
    $valDonos = $valorBase * (1 - $nDonos * 0.05);

    return ($ano > date("y"))? $valDonos : $valDonos - 3000 * (date("y") - $ano);

}

function exibirCarro($modelo, $marca, $ano, $revisao, $nDonos){
    $revisaoStr = $revisao ? 'Sim' : 'Não';
    $seminovoStr = semiNovo($ano) ? 'Sim' : 'Não';
    $precisaRevStr = precisaRevisao($revisao, $ano);
    $valorStr = valEstimado($marca, $ano, $nDonos);

    echo "O carro $marca $modelo,\n ano $ano,\n já passou por revisão: $revisaoStr,\n seminovo: $seminovoStr,\n número de donos: $nDonos,\n precisa de revisão? $precisaRevStr \n Valor estimado: R$$valorStr\n\n";
}


$carDB = [
    [
        "modelo" => "versa",
        "marca" => "nissan",
        "ano" => 2020,
        "revisao" => true,
        "nDonos" => 2,
    ],
    [
        "modelo" => "m5",
        "marca" => "bmw",
        "ano" => 2018,
        "revisao" => false,
        "nDonos" => 2,
    ],
    [
        "modelo" => "911",
        "marca" => "porsche",
        "ano" => 2026,
        "revisao" => false,
        "nDonos" => 1,
    ],
    [
        "modelo" => "Dolphin",
        "marca" => "byd",
        "ano" => 2023,
        "revisao" => false,
        "nDonos" => 1,
    ]
];

foreach($carDB as $car){
    exibirCarro($car["modelo"], $car["marca"], $car["ano"], $car["revisao"], $car["nDonos"]);
}
