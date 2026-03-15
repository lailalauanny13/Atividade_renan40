<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Digite um número de 1 a 5</h2>
    <form method="post">
        Número:
        <input type="number" name="numero" required>
        <br><br>
        <input type="submit" value="Mostrar">
</form>

<?php

    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];

        switch($numero){
        case 1:
        echo "Um";
        break;

        case 2:
        echo "Dois";
        break;

        case 3:
        echo "Três";
        break;

        case 4:
        echo "Quatro";
        break;

        case 5:
        echo "Cinco";
        break;

        default:
        echo "Número inválido";

}
}

?>
</body>
</html>