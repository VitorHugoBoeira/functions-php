<?php

function multiplo3($valor1){
    return $valor1 * 3;
}

$valor1 = readline ("Digite o número para saber o seu tiplo: ");
echo "valor: ". $valor1 . "\n";
echo "seu multiplo: " . multiplo3($valor1);
?>