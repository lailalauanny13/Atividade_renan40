<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="questao25.php" method="get">
        <label for="num1">Digite o primeiro numero:</label>
        <input type="number" name="num1" id="num1">

        <label for="num2">Digite o segundo numero:</label>
        <input type="number" name="num2" id="num2">

        <input type="submit" value="Enviar">
    </form>
    
    <?php 
        
    
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];

            if ($num1 == $num2) {
                echo "Os números são iguais";
            } else {
                if ($num1 > $num2) {
                    echo "O número $num1 é maior que $num2";
                } else {
                    echo "O número $num2 é maior que $num1";
                }
            }
        
    ?>
    
</body>
</html>