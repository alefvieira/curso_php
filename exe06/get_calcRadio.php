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
     $num = ($_GET["numero"] != null) ? $_GET["numero"] :  0 ;
     $radio = $_GET["oper"];

     switch($radio){
         case 1:
            $calcValor = $num * 2;
            $operacao = "Doubro";
            break;
         case 2:
            $calcValor = $num **3; 
            // ou $calcValor = $num ^3; 
            $operacao = "Cubo";
            break;
         case 3:
            $calcValor = sqrt($num);
            $operacao = "Raiz Quadrada";
            break;
        default:
            $calcValor = "valor incorreto";
            break;
     }
     echo " $operacao de $num é  igual a $calcValor";
    ?>
    <a href="form_calcRadio.php">VOLTAR</a>
</body>
</html>