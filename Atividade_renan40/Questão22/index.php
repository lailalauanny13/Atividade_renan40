<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de Produtos</h2>
<form method="post">

<?php
    for($i = 1; $i <= 40; $i++){
?>
    <h4>Produto <?php echo $i; ?></h4>
    Preço de custo:
    <input type="number" step="0.01" name="custo[]" required>
    Preço de venda:
    <input type="number" step="0.01" name="venda[]" required>
    <br><br>

<?php
}
?>
    <input type="submit" value="Calcular">
</form>

<?php

    if(isset($_POST["custo"])){
        $custos = $_POST["custo"];
        $vendas = $_POST["venda"];

        $somaCusto = 0;
        $somaVenda = 0;

    for($i = 0; $i < 40; $i++){
        $somaCusto += $custos[$i];
        $somaVenda += $vendas[$i];

    if($vendas[$i] > $custos[$i]){
        echo "Produto ".($i+1)." → Lucro<br>";
    }
    else if($vendas[$i] < $custos[$i]){
        echo "Produto ".($i+1)." → Prejuízo<br>";
    }
    else{
        echo "Produto ".($i+1)." → Empate<br>";
}

}

$mediaCusto = $somaCusto / 40;
$mediaVenda = $somaVenda / 40;

echo "<br>Média do preço de custo: $mediaCusto";
echo "<br>Média do preço de venda: $mediaVenda";

}

?>
</body>

</html>