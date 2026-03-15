<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Quantidade de números</h2>
    <form method="post">
        Digite quantos números deseja informar:
        <input type="number" name="qtd" required>
        <input type="submit" value="Criar">
    </form>

<?php

    if(isset($_POST["qtd"])){
        $qtd = $_POST["qtd"];

?>

    <form method="post">
<?php
    for($i = 1; $i <= $qtd; $i++){
?>
        Número <?php echo $i; ?>:
        <input type="number" name="numeros[]" required>
        <br><br>
<?php
}
?>
        <input type="submit" name="verificar" value="Verificar">
    </form>

<?php
}

    if(isset($_POST["verificar"])){
        $numeros = $_POST["numeros"];
        $qtd = count($numeros);

    for($i = 0; $i < $qtd; $i++){
        if($numeros[$i] > 0){
            echo $numeros[$i] . " é POSITIVO <br>";
    }
        else if($numeros[$i] < 0){
            echo $numeros[$i] . " é NEGATIVO <br>";
    }
        else{
            echo $numeros[$i] . " é ZERO <br>";
}
}
}

?>

</body>

</html>