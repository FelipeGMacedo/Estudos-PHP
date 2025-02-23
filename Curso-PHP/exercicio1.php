<?php

do {
    echo "Digite seu nome: ";
    $nome = trim(readline());

    if (empty($nome) || is_numeric($nome)) {
        echo "Nome inválido! Não pode ser vazio nem conter apenas números.\n";
    }
} while (empty($nome) || is_numeric($nome));

echo "Seu nome é: $nome\n";
