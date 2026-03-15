<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="num1">Num1:</label>
        <input type="number" name="num1" id="num1">
        <input type="submit" value="Calcular">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["num1"])) {
        $num1 = $_GET["num1"];

        if ($num1 >= 100 && $num1 <= 200) {
            echo "O número $num1 esta no intervalo de 100 e 200";
        } else {
            echo "O número $num1 não esta no intervalo entre 100 e 200";
        }
    }
    ?>
    
</body>
</html>