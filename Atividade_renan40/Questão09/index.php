<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendimento Poupança</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Valor que deseja depositar (R$):</label>
        <input type="number" step="0.01" name="n1" id="n1" required>

        <input type="submit" value="Calcular Rendimento">
    </form>

    <?php 
    
    if (isset($_GET['n1'])) {
        $deposito = (float)$_GET['n1'];
        

        $taxa = 0.007;
        
        $rendimento = $deposito * $taxa;
        $valorTotal = $deposito + $rendimento;

        echo "<h3>Resultado após 1 mês:</h3>";
        echo "Valor depositado: R$ " . number_format($deposito, 2, ',', '.') . "<br>";
        echo "Rendimento do período: R$ " . number_format($rendimento, 2, ',', '.') . "<br>";
        echo "<strong>Valor total atualizado: R$ " . number_format($valorTotal, 2, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>