<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Digite um número: </label>
        <input type="text" name="n1" id="n1">

        <input type="submit" value="Enviar">
</form>


<?php
$numero = $_GET['n1'] ?? 0;


if ($numero > 10) {
    echo "O número $numero é maior que 10!";
}
?>

</body>
</html>