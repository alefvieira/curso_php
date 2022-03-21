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
        $nome = isset($_GET["nome"])? $_GET["nome"] : "[Não informado]";
        $ano = isset($_GET["anonascimento"])? $_GET["anonascimento"] : "[Não informado]";
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] :"[Não informado]";

        $idade = date("Y") - $ano;
        echo "$nome tem $idade anos";
    ?>
    <a href="form_ano_idade.php">VOLTAR</a>
</body>
</html>