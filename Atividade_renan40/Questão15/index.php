<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        
        <label for="numero">Escreva um número:</label>
        <input type="text" name="numero" id="numero">


        <input type="submit" value="Enviar">
</form>

<?php 
$numero = $_GET['numero'] ?? 0;

if ($numero >= 100 && $numero <= 200) {
    echo "O número $numero está no intervalo entre 100 e 200.";
} else {
    echo "O número $numero está fora do intervalo.";
}

?>

</body>
</html>