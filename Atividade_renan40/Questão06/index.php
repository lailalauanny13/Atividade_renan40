<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Variavel A</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Variavel B</label>
        <input type="text" name="n2" id="n2">

        <input type="submit" name="enviar" value="Enviar"> </form>

<?php

if (isset($_GET['enviar'])) {
    $a = $_GET['n1'] ?? 0;
    $b = $_GET['n2'] ?? 0;

    echo "Antes: A = $a, B = $b <br>"; 

    // Lógica da troca (Swap)
    $temp = $a; 
    $a = $b;    
    $b = $temp; 

    echo "Depois: A = $a, B = $b";
}
?>

</body>
</html>