<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dados do Funcionário</h2>
    <form method="post">
        Nome:
        <input type="text" name="nome" required>
        <br><br>
        Sexo:
        <select name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <br><br>
        Idade:
        <input type="number" name="idade" required>
        <br><br>
        Salário fixo:
        <input type="number" step="0.01" name="salario" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

<?php

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $idade = $_POST["idade"];
        $salario = $_POST["salario"];

    if($sexo == "M"){

        if($idade >= 30){
            $abono = 100;
        }else{
            $abono = 50;
        }

    }else{

        if($idade >= 30){
            $abono = 200;
        }else{
            $abono = 80;
        }

}
$salarioLiquido = $salario + $abono;

echo "Nome: $nome <br>";
echo "Salário líquido: $salarioLiquido";
}
?>

</body>
</html>