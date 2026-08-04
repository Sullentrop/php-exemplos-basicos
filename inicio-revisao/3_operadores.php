<?php

//Declaração das variáveis
$idade = 20;
$temDocumento = true;

//Condicional com operador (E)
if ($idade >= 18 && $temDocumento) {
    echo "Pode tirar carteira de motorista!";
}else {
    echo "Não pode tirar carteira de motorista!";
}

//Declaração das variáveis
$feriado = false;
$fimDeSemana = true;

//Condicional com operador (OU)
if ($feriado || $fimDeSemana) {
    echo "\nHoje é feriado ou fim de semana!";
} else {
    echo " Não é feriado";
}

