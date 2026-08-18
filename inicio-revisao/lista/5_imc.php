<?php

// Função que calcula o IMC
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

// Valores de teste
$peso = 70;
$altura = 1.75;

// Chamando a função
$resultadoIMC = calcularIMC($peso, $altura);

// Mostra o resultado do IMC na tela
echo "Seu IMC é: " . number_format($resultadoIMC, 2, ',', '.') . "<br>";

// Verificando a classificação
if ($resultadoIMC < 18.5) {
    echo "Classificação: Abaixo do peso";
} else if ($resultadoIMC <= 24.9) {
    echo "Classificação: Peso normal";
} else if ($resultadoIMC <= 29.9) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}

?>