<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    <?php
    // http://localhost/CURSOPHP/operadores_aritmeticos.php?n1=10.&n2=5.99&n3=8.99&n4=10000

    // $ sifrão cria variaveis
    // echo serve para criar tags no html pelo php
        $n1 = $_GET["n1"]; // $_GET["n1"] vai pegar da URL o valor da variavel n1
        $n2 = $_GET["n2"]; // $_GET["n2"] vai pegar da URL o valor da variavel n2
        $n3 = $_GET["n3"]; // $_GET["n3"] vai pegar da URL o valor da variavel n3
        $n4 = $_GET["n4"]; // $_GET["n4"] vai pegar da URL o valor da variavel n4
        // para receber valores pela URL tem que usar ?nomedavariavel=valor&nomedavariavel=valor
        // http://localhost/cursoPHP/operadores_aritmeticos.php?n1=10&n2=99
        $soma = $n1 + $n2;
        $subtr = $n1 - $n2;
        $mult = $n1 * $n2;
        $divis = $n1 / $n2;
        


        echo "<h1>Soma: $soma ! </h1>";
        echo "<h1>Subtração: $subtr ! </h1>";
        echo "<h1>Multiplicação: $mult ! </h1>";
        echo "<h1>Divisão: $divis ! </h1>";
        echo "<h1> Valor absoluto de $n1 é ".abs($n1)." </h1>";
        // abs() serve para pergar o valor absoluto de um número ex.: -3 seu valor absoluto é 3
        echo "<h1> A potencia de $n1 ² é ".pow($n1, 2)." </h1>";
        // .pow($n1, 2). é a potencia (número elevado a potencia)
        echo "<h1> A raiz quadrada de $n1  é ".sqrt($n1)." </h1>";
        // .sqrt($n1). é a operação que calcula a raiz de um número
        echo "<h1> O valor arredondado de $n3  é ".round($n3)." </h1>";
        // round() permite arredondar para cima um valor
        echo "<h1> O valor inteiro da variavel $n3  é ".intval($n3)." </h1>";
        // intval() permite arredondar para cima um valor
        echo "<h1> O valor de $n4 em moeda é R$".number_format($n4, 2)." </h1>";
        // number_format($n1, 2) permite inserir casas decimais, onde o número 2 é a quantidade
        
        echo "<h1> A formatação do número $n4  R$".number_format($n4, 2,",",".")." </h1>";
        // number_format($n1, 2) permite inserir casas decimais, onde o número 2 é a quantidade, o "," é a separação da casa decimal e "." é a separação do número na milhar

        $txtreceberN = "teste";
    ?>

    <script>
        const txtnome = "<?= $txtreceberN ?>"
        console.log(txtnome)
    </script>
</body>
</html>