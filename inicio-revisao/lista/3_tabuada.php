<?php
//Número informado para calcular a tabuada do 5
$numero = 5; 
//Altere este valor para calcular a tabuada
echo "Tabuada do " . $numero . "<br><br>";

//estrutura de repetição 'for' de 1 a 10
for ($i = 1; $i <= 10; $i++){
    $resultado = $numero * $i;
    echo $numero . "x" . $i . "=" . $resultado . "<br>";
}
