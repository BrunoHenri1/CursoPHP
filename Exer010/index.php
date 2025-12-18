<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixas de texto</title>
</head>
<body>
    <form action="cad.php" method="get">
        <?php 
            $cont = 1;
            while ($cont <= 5){
                echo "Valor $cont: <input type='number' name='v'$cont max='100' min='0' value=0>"."<br>";
                $cont ++;
            }
        ?>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>