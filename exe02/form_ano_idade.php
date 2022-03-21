<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_dados.php" method="get">
        <input type="text" name="nome" id="" placeholder="Nome">
        <input type="text" name="anonascimento" id="" placeholder="Ano de Nascimento">
        <fieldset>
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="masc"><label for="masc">Maculino</label>
            <input type="radio" name="sexo" id="fem" value="fem"><label for="fem">Feminino</label>
        </fieldset>
        
        <button type="submit">Enviar volores</button>

    </form>
</body>
</html>