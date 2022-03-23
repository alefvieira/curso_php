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
        $n1 = ($_GET["num"] != null)? $_GET["num"] : 0;

        switch($n1){
            case 2:
            case 3:             
            case 4:
            case 5:
            case 6:
                echo "Dia de acordar cedo";
                break;
            case 1:
            case 7:
            echo "Pode continuar dormindo";
                break;
            default:
                echo "Dia inválido";
                break;
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>