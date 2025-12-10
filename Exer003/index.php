<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        $txt = $_GET["txt"];
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php  echo $cor; ?>;
        }

    </style>
</head>
<body>
    <?php 
        echo "<span class='texto'>$txt</span><br>" 
    ?>
    <button onclick="history.back()">Voltar</button>
    
</body>
</html>