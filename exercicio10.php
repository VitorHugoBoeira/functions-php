<?php

function converterCelsiusParaFahrenheit($celsius){
    return ($celsius * 1.8) + 32;
}

$celsius = readline("Digite a temperatura em celsius para converte-la para Fahrenheit: ");
echo "a temperatura em celsius é: " . $celsius . "\n";
echo "a temperatura em Fahrenheit é: " . converterCelsiusParaFahrenheit($celsius);

?>