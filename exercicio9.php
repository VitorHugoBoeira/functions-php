<?php

function calcularAreaRetangulo($largura, $altura){
    return $largura * $altura;
}

$largura = readline("Digite a largura do retangulo: ");
$altura = readline("Digite a altura do retagulo: ");

echo "A area do retangulo é: " . calcularAreaRetangulo($largura, $altura);
?>