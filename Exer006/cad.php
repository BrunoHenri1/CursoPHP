<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $num = isset($_GET['num']) ?$_GET['num']: 0;
        $operador = isset($_GET['oper']) ?$_GET['oper']: 1;

        switch ($operador) {
            case 1:
                $r = $num * 2;
                break;
            case 2:
                $r = $num ** 3;
                break;
            case 3:
                $r = sqrt($num); 
        }
        echo "O resultado da do calculo foi $r";
    
    ?>
    <button onclick="history.back()">Voltar</button>
</body>
</html>