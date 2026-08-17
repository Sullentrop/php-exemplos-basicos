<?php

// Função simples com retorno
function somar(int $a, int $b): int {
    return $a + $b;
}

// Exibindo resultado
echo somar (4, 8);
echo "<br><br>";

// Procedimento (Função sem retorno)
function saudacao($nome = "aluno") {
    echo "Olá, $nome! Bem-vindo(a) ao PHP.
    <br>";
    }

    //Exibindo a saudação
    saudacao();
    saudacao("Maria");

    function mostrarLinha() {
        echo "------------------- <br>";
    }

mostrarLinha();