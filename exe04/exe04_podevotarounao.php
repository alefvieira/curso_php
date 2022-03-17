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
        if($idade >= 18){
            $votar = "já pode votar";
            $dirigir = "já pode dirigir";
        }
        else if($idade >= 16 && $idade < 18){
            $votar = "pode votar, mas não é obrigatório";
            $dirigir = "não pode votar";
        }
        else{
            $votar = "não pode votar";
            $digirir = "não pode digirir";
        }
        echo "
            <p>Com essa idade você $votar e também $dirigir </p>
        ";
    ?>
</html>
</body>