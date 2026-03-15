<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Funcionários</h2>
    <form method="post">

<?php
    for($i = 1; $i <= 584; $i++){
?>

        Funcionário <?php echo $i; ?><br>
        Nome:
        <input type="text" name="nome[]" required><br>
        Salário:
        <input type="number" step="0.01" name="salario[]" required><br>
        Salário mínimo:
        <input type="number" step="0.01" name="minimo[]" required><br>
        <br>
<?php
}
?>
        <input type="submit" value="Calcular">
    </form>
<?php

    if(isset($_POST["nome"])){
        $nomes = $_POST["nome"];
        $salarios = $_POST["salario"];
        $minimos = $_POST["minimo"];

        $aumentoTotal = 0;

        for($i = 0; $i < 584; $i++){
        $salario = $salarios[$i];
        $minimo = $minimos[$i];
        $quantidade = $salario / $minimo;

    if($quantidade < 3){
        $reajuste = $salario * 0.50;
    }
    else if($quantidade <= 10){
        $reajuste = $salario * 0.20;
    }
    else if($quantidade <= 20){
        $reajuste = $salario * 0.15;
    }
    else{
        $reajuste = $salario * 0.10;
    }

$novoSalario = $salario + $reajuste;
echo $nomes[$i] . " - Reajuste: $reajuste - Novo salário: $novoSalario <br>";
$aumentoTotal += $reajuste;
}
echo "<br>Aumento total da folha: $aumentoTotal";
}
?>
</body>
</html>