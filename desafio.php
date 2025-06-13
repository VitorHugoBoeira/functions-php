<?php

$listadecompras = [];

function adicionar(&$listadecompras){
$item = readline("Digite o nome do item que deseja adicionar: ");
$prioridade = readline("Digite a prioridade do item( 3 para Alta, 2 para Media ou 1 para Baixa): ");

$listadecompras[] = [
    'nome' => $item,
    'prioridade' => $prioridade
];
}

function remover(&$listadecompras){
    $remover = readline("Digite o item qual deseja remover: ");
    $listaremovida = false;
    $novalista = [];
    foreach($listadecompras as $item){
        if ($item['nome'] !== $remover){
            $novalista[] = $item;
        }
        else{
            $listaremovida = true;
        }
    }
        $listadecompras = $novalista;

        if($listaremovida){
            echo "Produto '$remover' removida com sucesso!\n";
        }
        else{
            echo "produto '$remover' não encontrado!\n";
        }
    }

function listar(&$listadecompras){
    echo "\t\t\033[4m\033[1mMENU\n\n3 - MAIOR PRIORIDADE\n2 - PRIORIDADE MEDIA\n1 - PRIORIDADE BAIXA\n\033[0m\033[0m\n";
    $prioridade = readline("Digite qual prioridade ver: ");
    $listafiltrada = [];
        foreach($listadecompras as $item){
        if($item['prioridade'] == $prioridade){
            $listafiltrada[] = $item;
        }
    }
    if (count ($listafiltrada) > 0){
        echo "tarefas com prioridade '$prioridade':\n";
        foreach($listafiltrada as $index => $item){
            echo ($index + 1) . ". {$item['nome']} - prioridade {$item['prioridade']}\n";
        }
    }
}
echo "\t\t\033[4m\033[1mMENU\n\n\t1 - ADICIONAR ITEM A LISTA\n\t2 - REMOVER ITEM DA LISTA\n\t3 - LISTAR\n\t4 - SAIR\n\033[0m\033[0m\n";

do{
    $terminal = readline("Digite qual Opção deseja utilizar: ");
    switch($terminal){

        case 1:

            adicionar($listadecompras);
            break;
        case 2:

            remover($listadecompras);
            break;
        case 3:

            listar($listadecompras);
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