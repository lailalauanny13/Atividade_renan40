<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Primeiro número</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Segundo número</label>
        <input type="text" name="n2" id="n2">

        <input type="submit" value="Enviar">
    </form>

<?php
$n1 = $_GET['n1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;

echo $n1 + $n2;
echo "<br>";
echo $n1 - $n2; 
echo "<br>";
echo $n1 * $n2;
echo "<br>";
echo $n1 / $n2;
?>

</body>
</html>