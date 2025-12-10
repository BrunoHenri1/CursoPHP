<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Idade</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        $nome = $_GET["nome"];
        $ano = $_GET["idade"];
        $idade = date("Y") - $ano;

        $msg = "Olá $nome, voce possui $idade anos,";

        if($idade >= 18) {
            echo "$msg voce pode votar e dirigir";
        }
         else  if ($idade >=16){
            echo "$msg voce pode Votar, mas não dirigir";
        }
        else {
            echo "$msg voce não pode votar nem dirigir";
        }
    ?>
    <button onclick="history.back()">Voltar</button>
</body>
</html>