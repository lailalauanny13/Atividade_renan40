<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Mamão com Açúcar</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Digite o valor da compra:</label>
        <input type="text" name="n1" id="n1">

        <input type="submit" name="enviar" value="Enviar">
    </form>

<?php 
if (isset($_GET['enviar'])) {
    $valorCompra = (float)($_GET['n1'] ?? 0);

    
    $prestacao = $valorCompra / 5;

    echo "<h3>Resultado do Parcelamento</h3>";
    echo "O valor total da compra é: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
    echo "O valor de cada prestação (5x) é: R$ " . number_format($prestacao, 2, ',', '.');
}
?>

</body>
</html>