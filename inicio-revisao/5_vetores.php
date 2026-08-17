<?php

//Vetor (array simples - "1 linha")
$frutas = ["Maçã", "Banana", "Uva"];

//Exibindo os valores com laço
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta <br>";
}

//Array (linha e colunas)

$matriz = [
    ["Max Verstappen", "Oscar piastri", "Lando Norris"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russell"],
    ["Fernando Alonso", "Carlos Sainz", "Gabriel Bortoleto"]
];

echo "<br>";
echo "Lista de pilotos de F1 (Dica: O 1º é o melhor.)
<br><br>";

//Exibindo os valores da matriz
foreach ($matrtiz as $linha) {
    foreach ($linha as $Piloto) {
        echo $piloto . " | ";
    }
    echo "<br>";
}