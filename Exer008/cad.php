<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $estado = $_GET["estados"];

        switch ($estado) {
            case 'ac':
            case 'ap';
            case 'am':
            case 'pa';
            case 'ro':
            case 'rr';
            case 'to';
                echo "Voce mora na <span style='color: red;'>Região Norte</span>";
                break;
            case 'ma':
            case 'pi';
            case 'ce':
            case 'rn';
            case 'pb':
            case 'pe';
            case 'al';
            case 'se';
            case 'ba';
                echo "Voce mora na <span style='color: red;'>Região Nordeste</span>";
                break;
            case 'df':
            case 'go';
            case 'mt':
            case 'ms';
                echo "Voce mora na <span style='color: red;'>Região Centro-Oeste</span>";
                break;
            case 'es':
            case 'mg';
            case 'rj':
            case 'sp';
                echo "Voce mora na <span style='color: red;'>Região Sudeste</span>";
                break;
            case 'pr';
            case 'sc':
            case 'rs';
                echo "Voce mora na <span style='color: red;'>Região Sul</span>";
                break;
        }
    ?>
    <button onclick="history.back()">Voltar</button>
</body>
</html>