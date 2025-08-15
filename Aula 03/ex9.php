<?php

$temp = readline(prompt: "Temperatura: ");

echo($temp > 25) ? "Quente" : (($temp > 15) ? "Agradável" : "Frio"); 