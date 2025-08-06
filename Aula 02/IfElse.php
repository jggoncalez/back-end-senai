<?php
$nota1 = 5;
$nota2 = 0;
$media = ($nota1 + $nota2)/2;


if ($media > 10) {
    echo "Erro, média acima do permitido \n";
} elseif ($media > 8) {
    echo "Média excelente ", $media;
} elseif ($media > 6) {
    echo "Boa! ", $media;
} elseif ($media > 4) {
    echo "Hmmm... quase ", $media; 
} elseif ($media > 2) {
    echo "Vixe, aí não deu certo! ", $media;
} else {
    echo "Você está no bico do corvo ", $media;
}
?>