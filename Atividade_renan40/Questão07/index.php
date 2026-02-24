<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Escreva uma temperatura</label>
        <input type="text" name="n1" id="n1">

        <input type="submit" value="Enviar">
</form>

<?php 
$n1 = $_GET['n1'] ?? 0;

echo "F = $n1 x 1,8 + 32 = " . ($n1 * 1.8 + 32);
?>

</body>
</html>