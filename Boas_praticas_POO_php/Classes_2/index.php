<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Suporte</title>
</head>
<body>
    <?php
        require_once "Suporte.php";
        
        $sup = new Suporte("Álef Vieira Coutinho", "123456", "Migração", "CM Vargem Alta");
        // $sup->setTecnico("Álef Vieira Coutinho");
        // $sup->setDesc("Migração");
        // $sup->setChamado("123456");

        echo "O técnico atribuído ao chamado:{$sup->getChamado()} é {$sup->getTecnico()} que deverá fazer {$sup->getDesc()} no cliente {$sup->getCliente()}"
    ?>
</body>
</html>
