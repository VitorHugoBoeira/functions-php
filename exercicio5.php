<?php

function dobrarnumero($numero){
     $resultado = $numero * 2;
     return $resultado;
}

$numero = readline("Digite um numero para dobrar ele: ");
echo "Número: $numero\n";
echo "Dobro do número: ", dobrarnumero($numero);
?>
