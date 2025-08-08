<?php

$nota = readline(prompt:"Nota: ");

echo ($nota >= 9) ? "Excelente" : (($nota >= 7) ? "Bom" : "Reprovado");