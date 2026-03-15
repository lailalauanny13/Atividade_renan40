<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de Pessoas</h2>
    <form method="post">
        Quantidade de pessoas:
        <input type="number" name="qtd" required>
        <br><br>
        <input type="submit" value="Criar formulário">
    </form>

<?php

    if(isset($_POST["qtd"])){
    $qtd = $_POST["qtd"];

?>

<form method="post">

<?php
    for($i = 1; $i <= $qtd; $i++){
?>
    <h4>Pessoa <?php echo $i; ?></h4>
    Nome:
    <input type="text" name="nome[]" required><br>
    Sexo:
    <select name="sexo[]" required>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    </select><br>
    Idade:
    <input type="number" name="idade[]" required><br>
    Saúde:
    <select name="saude[]" required>
    <option value="Boa">Boa</option>
    <option value="Ruim">Ruim</option>
    </select>
    <br><br>

<?php
}
?>
    <input type="submit" name="verificar" value="Verificar">
</form>

<?php
}

    if(isset($_POST["verificar"])){

        $nomes = $_POST["nome"];
        $sexos = $_POST["sexo"];
        $idades = $_POST["idade"];
        $saudes = $_POST["saude"];

        $qtd = count($nomes);

        $aptos = 0;
        $naoAptos = 0;

    for($i = 0; $i < $qtd; $i++){
    if($sexos[$i] == "Masculino" && $idades[$i] >= 18 && $saudes[$i] == "Boa"){
        echo $nomes[$i] . " está APTO para o serviço militar<br>";
        $aptos++;
    }else{
        echo $nomes[$i] . " NÃO está apto para o serviço militar<br>";
        $naoAptos++;

}

}

echo "<br>Total de aptos: $aptos";
echo "<br>Total de não aptos: $naoAptos";

}

?>

</body>
</html>