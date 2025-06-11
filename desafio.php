<?php

$listadecompras = [];

function adicionar(){
$item = readline("Digite o nome do item que deseja adicionar:");
$prioridade = readline("Digite a prioridade do item( 3 para Alta, 2 para Media ou 1 para Baixa: ");

$listadecompras[$item] = $prioridade;

}

function remover(){
$remover = readline("Digite o item qual deseja remover: ");
            $chave = array_search($remover, $listadecompras);
            if ($chave !== false){
                unset($listadecompras[$chave]);

            }
}
function listar(){
    foreach($listadecompras as $item => $prioridade){
            echo "$item: $prioridade\n";
    }

}
echo "\t\t\033[4m\033[1mMENU\n\n\t1 - ADICIONAR ITEM A LISTA\n\t2 - REMOVER ITEM DA LISTA\n\t3 - LISTAR\n\t4 - SAIR\n\033[0m\033[0m\n";

do{
    $terminal = readline("Digite qual Opção deseja utilizar:");
    switch($terminal){

        case 1:

            adicionar();
            break;
        case 2:

            remover();
            break;
        case 3:

            listar();
            break;
        case 4:
           
            echo "\033[1mSAINDO!\n\033[0m";
            break;
        default:
        
            echo "\033[1mOPERAÇÃO INVALIDA!\n\033[0m";
            break;    
}
}
while ($terminal !== 4);
?>