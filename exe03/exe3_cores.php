<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

        $text = isset($_GET["texto"]) ? $_GET["texto"] : "Texto não preenchido";
        $tam = isset($_GET["tamanho"]) ? $_GET['tamanho']."px" : 0;
        $cor = isset($_GET["color"]) ? $_GET['color'] : "none";
    ?>

    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        echo "<span class='texto'> $text </span>"
    ?>
</body>
</html>
