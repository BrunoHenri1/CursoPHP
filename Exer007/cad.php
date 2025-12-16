<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $diaSem = isset($_GET['ds']) ? $_GET['ds'] : 0;

        switch ($diaSem) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Nesse dia voce Estuda";
                break;
            case 6:
            case 7:
                echo "Final de semana, vai aproveitar";
                break;
            default:
                echo "Dia Inválido!";
        }
    ?>
    <button onclick="history.back()">Voltar</button>
</body>
</html>