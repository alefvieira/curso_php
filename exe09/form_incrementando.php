<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_formIncremento.php" method="get">
        <label for="int">Inicio</label><input type="number" name="numI" id="ini" required>
        <label for="fim">Fim</label><input type="number" name="numF" id="fim" required>
        <select name="emqq" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <button type="submit"
        >Enviar</button>
    </form>
</body>
</html>