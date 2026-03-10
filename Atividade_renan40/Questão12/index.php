<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Qual o custo de fabrica desse carro?</label>
        <input type="text" name="n1" id="n1">

        <input type="submit" value="Enviar">
</form>

<?php 
<?php
$custoFabrica = 50000.00;
$percentualImpostos = 0.45;
$percentualDistribuidor = 0.28; 

 
$valorComImpostos = $custoFabrica + ($custoFabrica * $percentualImpostos);


$custoConsumidor = $valorComImpostos + ($valorComImpostos * $percentualDistribuidor);

echo "Custo final ao consumidor: R$ " . number_format($custoConsumidor, 2, ',', '.');
?>
?>

</body>
</html>