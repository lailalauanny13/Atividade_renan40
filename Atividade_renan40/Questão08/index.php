<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Conversor de Moedas</title>
</head>
<body>
    <h2>Conversor US$ para R$</h2>
    <form method="POST">
        <label>Cotação do Dólar:</label><br>
        <input type="number" step="0.01" name="cotacao" required><br><br>

        <label>Quantidade de Dólares (US$):</label><br>
        <input type="number" step="0.01" name="dolares" required><br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cotacao = $_POST['cotacao'];
        $dolares = $_POST['dolares'];
        
        $total = $dolares * $cotacao;

        echo "<h3>Resultado: R$ " . number_format($total, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>