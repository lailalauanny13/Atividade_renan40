<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Nome</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Salario</label>
        <input type="text" name="n2" id="n2">

        <label for="n3">Total de vendas</label>
        <input type="text" name="n3" id="n3">

        <input type="submit" name="enviar" value="Enviar"> </form>

<?php 
if (isset($_GET['enviar'])) {
    $nome = $_GET['n1'] ?? "";
    $salarioFixo = (float)($_GET['n2'] ?? 0);
    $vendas = (float)($_GET['n3'] ?? 0);

    
    $comissao = $vendas * 0.15;
    $totalFinal = $salarioFixo + $comissao;

    echo "<br>Vendedor: $nome <br>";
    echo "Salário Fixo: R$ " . number_format($salarioFixo, 2, ',', '.') . "<br>";
    echo "Salário Final: R$ " . number_format($totalFinal, 2, ',', '.');
}
?>

</body>
</html>