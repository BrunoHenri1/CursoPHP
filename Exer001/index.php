<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <main>
        <?php 
            $valor = $_GET["v"];
            $raiz = sqrt($valor);
            
            echo "A raiz quadrada de $valor é ".number_format($raiz, 2, ",",".");
        ?>
    </main>
    
</body>
</html>