<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador pulando</title>
</head>
<body>
    <?php  
    
    $cont = 0;

    while ($cont <= 20){
        echo $cont . "<br>";
        $cont += 2;
    }
    ?>
</body>
</html>