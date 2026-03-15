<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de valor de venda</title>
</head>
<body>
    <form method="get" action="">
        <label>Preço de custo:</label>
        <input type="number" name="custo" step="0.01" required><br><br>
        <label>percentual de acrescimo:</label>
        <input type="number" name="acrescimo" step="0.01" required><br><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_GET['calcular'])) {
        $custo = $_GET['custo'];
        $percentual = $_GET['acrescimo'];
        $acrescimo = $custo * ($percentual / 100);
        $valor_venda = $custo + $acrescimo;

        echo "<h3>Resultado:</h3>";
        echo "<h3>Preço de custo: R$ $custo</h3>";
        echo "<h3>Percentual de acrescimo: $percentual%</h3>";
        echo "<h3>O valor de venda é: R$ $valor_venda</h3>";
    }
    ?>
</body>
</html>