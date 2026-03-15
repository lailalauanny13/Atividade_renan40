<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Digite dois números</h2>
    <form method="post">
        Número 1:
        <input type="number" name="num1" required>
        <br><br>
        Número 2:
        <input type="number" name="num2" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

<?php

    if(isset($_POST["num1"])){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

    if($num1 == $num2){
        echo "Os números são iguais";
}
    else{
        echo "Os números são diferentes <br>";
    if($num1 > $num2){
        echo "O maior número é: $num1";
}
    else{
        echo "O maior número é: $num2";
}
}
}
?>
</body>
</html>