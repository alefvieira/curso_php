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
        $num1 = $_GET["numero1"];
        $num2 = $_GET["numero2"];
        $potencia = pow($num1, 2);
        $raiz = number_format(sqrt($num2), 2);
        $soma = $num1 + $num2;
        echo "A SOMA É $soma <br/>";
        echo "A Potência é $potencia <br/>";
        echo "A Raiz é $raiz <br/>";
    ?>
    <a href="form_calcs.php"> Voltar</a>
</body>
</html>