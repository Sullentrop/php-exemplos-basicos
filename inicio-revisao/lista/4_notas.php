<?php
// 1. Vetor com as 5 notas da turma (sem aspas nos números)
$notas = [5.5, 3.0, 7.5, 9.0, 6.0];

// Variáveis para ajudar nos cálculos
$soma = 0;
$maiorNota = $notas[0];
$menorNota = $notas[0];

// 2. Exibindo as notas com o laço foreach (usando a base do seu professor)
foreach ($notas as $indice => $nota) {
    echo "Aluno na Posição $indice: Nota $nota <br>";
    
    // Somamos a nota atual ao total
    $soma += $nota;
    
    // Atualiza a maior e a menor nota
    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }
    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}

// 3. Cálculo da média
$media = $soma / count($notas);

// 4. Exibição dos resultados finais
echo "<br>";
echo "Média da turma: " . number_format($media, 2, ',', '.') . "<br>";
echo "Maior nota: " . number_format($maiorNota, 1, ',', '.') . "<br>";
echo "Menor nota: " . number_format($menorNota, 1, ',', '.') . "<br>";
?>