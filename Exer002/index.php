<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php 
            $nome = $_GET["nome"];
            $ano = $_GET["ano"];
            $sexo = $_GET["sexo"];

            $idade = date('Y') - $ano;

            echo "Olá $nome, vi que voce nesceu em $ano, sua idade atual é $idade anos! e seu Sexo é $sexo"
        ?>
    </main>
</body>
</html>