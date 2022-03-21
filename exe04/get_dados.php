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
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $idade = date("Y") - $ano;

        echo "<h1>Você tem $idade anos<h1/>";
        if(($idade >= 16 && $idade < 18) || $idade > 65){
            $votar = "Voto opcional";
            $dirigir = "não pode dirigir";
        }
        else if($idade >= 18){
            $votar = "voto obrigátorio";
            $dirigir = "pode dirigir";
        }
        else{
            $votar = "não vota";
            $dirigir = "não pode dirigir";
        }

        echo "
            <p>Para essa idade, $votar e também $dirigir </p>
        ";
    ?>
</html>
</body>