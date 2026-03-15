<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Venda de Veículos</h2>
    <form method="post">
        Valor do veículo:
        <input type="number" step="0.01" name="valor" required>
        <br><br>
        Combustível:
        <select name="combustivel" required>
            <option value="alcool">Álcool</option>
            <option value="gasolina">Gasolina</option>
            <option value="diesel">Diesel</option>
        </select>
        <br><br>
        <input type="hidden" name="totalDesconto" value="<?php echo isset($_POST['totalDesconto']) ? $_POST['totalDesconto'] : 0; ?>">
        <input type="hidden" name="totalPago" value="<?php echo isset($_POST['totalPago']) ? $_POST['totalPago'] : 0; ?>">
        <input type="submit" name="calcular" value="Calcular">
    </form>

<?php

    if(isset($_POST["calcular"])){
        $valor = $_POST["valor"];
        $combustivel = $_POST["combustivel"];
        $totalDesconto = $_POST["totalDesconto"];
        $totalPago = $_POST["totalPago"];

    if($valor == 0){

        echo "<h3>Total de desconto: $totalDesconto</h3>";
        echo "<h3>Total pago pelos clientes: $totalPago</h3>";

    }else{

    if($combustivel == "alcool"){
        $desconto = $valor * 0.25;
    }
    else if($combustivel == "gasolina"){
        $desconto = $valor * 0.21;
    }
    else{
        $desconto = $valor * 0.14;
    }

$valorFinal = $valor - $desconto;
$totalDesconto += $desconto;
$totalPago += $valorFinal;

echo "Desconto: $desconto <br>";
echo "Valor a pagar: $valorFinal <br>";

}
}
?>
</body>
</html>