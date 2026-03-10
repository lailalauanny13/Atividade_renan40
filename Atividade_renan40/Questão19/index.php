<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
        <?php for ($i = 1; $i < 57; $i++):?>
            Pessoa <?= $i ?>:
            <br>
            Sexo:
            <select name="sexo[]" required>
                <option value="">Selecione</option>
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
            </select>
            <br>
            Nome:
            <input type="text" name="nome[]" id="nome">
            <br>
        <?php endfor;?>  
        <input type="submit" value="Enviar">
        <br>  
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nome"], $_POST["sexo"])) {

        $nomes = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $contador_f = 0;
        $contador_m = 0;

        foreach ($sexo as $s => $s_sexo) {
            echo $nomes[$s] . " é do sexo " . $s_sexo . "<br>";

            switch ($s_sexo) {
                case "feminino":
                    $contador_f++;
                    break;
                case "masculino":
                    $contador_m++;
                    break;
                default:
                    echo "Invalido";
                    break;
            }
        }

        echo "Temos um total de $contador_f de individuos do sexo feminino e $contador_m do sexo masculino";
    }
    ?>
    
    
</body>
</html>