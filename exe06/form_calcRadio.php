<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="get_calcRadio.php">
            <label for="num">Número: </label><input id="num" type="number" name="numero">
            <fieldset><legend>Operação</legend>
                <input type="radio" name="oper" id="dobro" value="1" checked>
                <label for="dobro">Dobro</label>
                
                <br>
                <input type="radio" name="oper" id="cubo" value="2">
                <label for="cubo">Cubo</label>
                
                <br>
                <input type="radio" name="oper" id="raiz" value="3">
                <label for="raiz">Raiz Quadrada</label>
                
            </fieldset>
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>