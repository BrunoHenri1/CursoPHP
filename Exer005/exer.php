<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $media = ($n1 + $n2)/2;
        
        function colorirNota($nota){
            if ($nota >= 8){
                $cor = "green";
            } else if($nota >= 5){
                $cor = "yellow";
            } else {
                $cor = "red";
            }
            return "<span style='color: $cor;'>$nota</span>";
        }
        $corn1 = colorirNota($n1);
        $corn2 = colorirNota($n2);
        echo "A média entre $corn1 e $corn2 é igual a $media<br>";

        function calcularMedia($media){
            if ($media >= 8){
                $res = "<span style='color: green;'>APROVADO!</span>";
            } else if ($media >=5){
                $res = "<span style='color: yellow;'>RECUPERAÇÃO!</span>";
            } else {
                $res = "<span style='color: red;'>REPROVADO!</span>";
            }
            return $res;
        }
        $mediaGeral = calcularMedia($media);
        echo "Situação do aluno é $mediaGeral";
    ?>
    <button onclick="history.back()">Voltar</button>
</body>
</html>