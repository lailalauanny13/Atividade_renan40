<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Nome</label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Nota1</label>
        <input type="text" name="n2" id="n2">

        <label for="n3">Nota2</label>
        <input type="text" name="n3" id="n3">

        <label for="n4">Nota3</label>
        <input type="text" name="n4" id="n4">

        <input type="submit" name="enviar" value="Enviar"> </form>

<?php 

if (isset($_GET['enviar'])) {
    $Nome = $_GET['n1'] ?? "";
    $Nota1 = (float)($_GET['n2'] ?? 0); 
    $Nota2 = (float)($_GET['n3'] ?? 0);
    $Nota3 = (float)($_GET['n4'] ?? 0);

    echo "Nome: $Nome<br>";
    echo "Nota 1: $Nota1<br>";
    echo "Nota 2: $Nota2<br>";
    echo "Nota 3: $Nota3<br>";

    $media = ($Nota1 + $Nota2 + $Nota3) / 3;

    echo "Média: " . number_format($media, 2) . "<br>";
}
?> </body>
</html>