<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquanto</title>
</head>
<body>
    <form action="get_valores.php">
        <?php
            $c = 1;
            $varr = "variavel";

            while($c <= 5){
                
                echo "Valor $c: <input type='text' name='n$c' required></br>";      
                $c++;
            };
        ?>
        <button type="submit">Enviar</button>

    </form>
    
</body>
</html>