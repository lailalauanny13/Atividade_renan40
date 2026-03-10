<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Qual o seu nome? </label>
        <input type="text" name="n1" id="n1">

        <label for="n2">Primeira nota</label>
        <input type="text" name="n2" id="n2">

         <label for="n3">Segunda nota;</label>
        <input type="text" name="n3" id="n3">

         <label for="n4">Terceira nota;</label>
        <input type="text" name="n4" id="n4">


        <input type="submit" value="Enviar">
</form>

<?php 
$n1 = $_GET['n1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;
$n1 = $_GET['n3'] ?? 0;
$n2 = $_GET['n4'] ?? 0;


$media = ($n1 + $n2 + $n3) / 3;

echo "Aluno: $nome <br>";
echo "Média: " . round($media, 2) . "<br>";

if ($media >= 7) {
    echo "Situação: Aprovado";
} elseif ($media <= 5) {
    echo "Situação: Reprovado";
} else {
    echo "Situação: Recuperação";
}
?>

</body>
</html>