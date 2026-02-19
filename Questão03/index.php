<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Distância</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Combustível</label>
        <input type="text" name="n2" id="n2">

        <input type="submit" value="Enviar">
</form>

<?php 
$distancia = $_GET['n1'] ?? 0;
$combustivel = $_GET['n2'] ?? 0;

echo "O consumo médio é: ";
echo $distancia / $combustivel;
?>

</body>
</html>