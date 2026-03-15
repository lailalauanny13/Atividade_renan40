<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Digite o número do mês</h2>
    <form method="post">
        Número do mês:
        <input type="number" name="mes" required>
        <br><br>
        <input type="submit" value="Mostrar mês">
    </form>

<?php

    if(isset($_POST["mes"])){
    $mes = $_POST["mes"];

        switch($mes){
            
            case 1:
            echo "Janeiro";
            break;
            
            case 2:
            echo "Fevereiro";
            break;
            
            case 3:
            echo "Março";
            break;
            
            case 4:
            echo "Abril";
            break;
            
            case 5:
            echo "Maio";
            break;
            
            case 6:
            echo "Junho";
            break;
            
            case 7:
            echo "Julho";
            break;
            
            case 8:
            echo "Agosto";
            break;
            
            case 9:
            echo "Setembro";
            break;
            
            case 10:
            echo "Outubro";
            break;
            
            case 11:
            echo "Novembro";
            break;
            
            case 12:
            echo "Dezembro";
            break;

default:
echo "Mês inválido";

}
}

?>
</body>

</html>