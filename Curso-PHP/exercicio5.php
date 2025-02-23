<?php

function celsiusParaFahrenheit(float $celsius): float {
    return ($celsius * 1.8) + 32;
}

function celsiusParaKelvin(float $celsius): float {
    return $celsius + 273.15;
}

echo "Digite a temperatura em Celsius que deseja converter para Fahrenheit e Kelvin: ";

$entrada = trim(fgets(STDIN));

if (is_numeric($entrada)) {
    $temperatura = (float) $entrada;
    $fahrenheit = celsiusParaFahrenheit($temperatura);
    $kelvin = celsiusParaKelvin($temperatura);

    echo "\nTemperatura informada: {$temperatura}°C\n";
    echo "Convertida para Fahrenheit: {$fahrenheit}°F\n";
    echo "Convertida para Kelvin: {$kelvin}K\n";
} else {
    echo "Entrada inválida. Por favor, insira um número.\n";
}
