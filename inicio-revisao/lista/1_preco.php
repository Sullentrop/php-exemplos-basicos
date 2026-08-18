<?php
// 1. Entrada de dados
$precoUnitario = 50.00; // Defina o preço do produto
$quantidade = 5;        // Defina a quantidade comprada

// 2. Cálculo do valor total
$valorTotal = $precoUnitario * $quantidade;

// 3. Verificação do desconto (10% para compras >= R$ 200,00)
$desconto = 0;

if ($valorTotal >= 200.00) {
    $desconto = $valorTotal * 0.10;
}

$valorFinal = $valorTotal - $desconto;

// 4. Exibição dos resultados (<br> para quebra de linha no navegador)
echo "Preço unitário: R$ " . number_format($precoUnitario, 2, ',', '.') . "<br>";
echo "Quantidade: " . $quantidade . "<br>";
echo "Valor total inicial: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";

if ($desconto > 0) {
    echo "Desconto aplicado (10%): R$ " . number_format($desconto, 2, ',', '.') . "<br>";
} else {
    echo "Sem direito a desconto.<br>";
}

echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
?>