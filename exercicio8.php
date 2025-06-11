<?php

function dadosUsuario() {
    $nome = readline("Digite seu nome: ");
    $email = readline("Digite seu email: ");
    $cidade = readline("Digite sua cidade: ");
    return [$nome, $email, $cidade];
}

list($nome, $email, $cidade) = dadosUsuario();
echo "Nome: $nome\n";
echo "Email: $email\n";
echo "Cidade: $cidade\n";
?>