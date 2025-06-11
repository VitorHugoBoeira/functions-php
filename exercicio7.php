<?php

function maioridade($valor){

    if($valor >= 18){   
        return "true";
    }
    elseif($valor < 18){
        return "false";

    }

}
$valor = readline("Digite sua idade: ");
$resultado = maioridade($valor);
echo $resultado;
?>