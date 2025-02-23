<?php

echo "Digite o ano que deseja saber se é bissexto:\n";

$ano = readline();

function anoBissexto($ano){
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

if (anoBissexto($ano)){
    echo "$ano é um ano bissexto!";
} else {
    echo "$ano não é um ano bissexto";
}