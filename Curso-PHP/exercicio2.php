<?php

function lerNota($mensagem) {
    while (true) {
        echo $mensagem;
        $nota = readline();

        if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
            return (float)$nota;
        }

        echo "Valor inválido! Digite uma nota entre 0 e 10.\n";
    }
}

echo "Digite seu nome: ";
$nome = trim(readline());

$n1 = lerNota("Digite sua primeira nota (0-10): ");
$n2 = lerNota("Digite sua segunda nota (0-10): ");
$n3 = lerNota("Digite sua terceira nota (0-10): ");

$mediaNota = ($n1 + $n2 + $n3) / 3;

echo "\n$nome\n";
echo "Sua média é: " . number_format($mediaNota, 2, ',', '.') . "\n";

if ($mediaNota >= 7) {
    echo "Status: Aprovado!\n";
} elseif ($mediaNota >= 5) {
    echo "Status: Recuperação!\n";
} else {
    echo "Status: Reprovado!\n";
}
