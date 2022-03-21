<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 1;
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 1;
       
        $media = ($n1 + $n2)/ 2;

        if($media < 5){
            $situacao = "REPROVADO";
            $cor = "#b32323";
        
        }
        else if($media >= 5 && $media < 7 ){
            $situacao = "RECUPERAÇÃO";
            $cor = "#b9b951";
        }
        else{
            $situacao = "APROVADO";
            $cor = "#0b7218";
        }

        echo "<h1>A média das notas $n1 e $n2 é <span style='color: $cor'>$media</span> </h1>
       
        
        <h1>Situação: <span style='color: $cor'>$situacao</span></h1>
        ";
    ?>
</body>
</html>