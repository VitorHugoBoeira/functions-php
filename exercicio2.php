<?php

function apresentarPessoa($nome){

    return "\nOlá, $nome! É um prazer te conhecer. \n";

}

$nome = readline("Digite seu nome: ");
echo apresentarPessoa($nome);
?>