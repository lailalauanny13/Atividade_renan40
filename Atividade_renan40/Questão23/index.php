<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Digite um número</h2>
    <form method="post">
        Número:
        <input type="number" name="numero" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

<?php

    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];

    if($numero > 80){
        echo "O número é maior que 80";
    }
    if($numero < 25){
        echo "O número é menor que 25";
    }
    if($numero == 40){
        echo "O número é igual a 40";
}
}

?>
</body>

</html>