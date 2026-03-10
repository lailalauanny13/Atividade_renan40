<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Escreva o primeiro número:</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Escreva o segundo número:</label>
        <input type="text" name="n2" id="n2">

        <input type="submit" value="Enviar">
</form>

<?php 
$n1 = $_GET['n1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;

if ($n1 > $n2) {
    echo "O número $n1 é maior que $n2!";
} elseif ($n2 > $n1) {
    echo "O número $n2 é maior que $n1!";
}

?>

</body>
</html>