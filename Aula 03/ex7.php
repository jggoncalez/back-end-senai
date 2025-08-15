<?php
$j = readline("Número: ");

for($i = 0; $i < $j; $i++){
    if ($i %2 == 0){
        echo "$i\n";
    } else {
        continue;
    };
}