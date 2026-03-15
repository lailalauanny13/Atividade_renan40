<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php

$contadorNoIntervalo = 0; 
$totalNumeros = 80;

echo "<h3>Análise de Números (Intervalo 10 a 150)</h3>";

for ($i = 1; $i <= $totalNumeros; $i++) {

    $numero = rand(1, 300);

    
    if ($numero >= 10 && $numero <= 150) {
        $contadorNoIntervalo++;
        echo "Número $i: $numero <span style='color: green;'>[DENTRO]</span><br>";
    } else {
        echo "Número $i: $numero <span style='color: red;'>[FORA]</span><br>";
    }
}

echo "<hr>";
echo "<strong>Resultado final:</strong><br>";
echo "Foram lidos $totalNumeros números.<br>";
echo "Total de números no intervalo entre 10 e 150: <b>$contadorNoIntervalo</b>";

?>
</body>
</html>