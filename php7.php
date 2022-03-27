<?php
        // phpinfo(); // esse metodo vai verificar a versão do php
$n1 = 5;
$n2 = 2;

$c = $n1 <=> $n2; // é o metodo de comparação, os resultados podem ser -1, 0 e 1
// SE O PRIMEIRO numero ou string for maior que o outro o resultado será 1
// SE O SEGUNDO numero ou string for maior que o outro o resultado será -1
// SE os numeros ou strings forem iguais será 0
var_dump($c); // 1 

$n1 = 5;
$n2 = 5;

$c = $n1 <=> $n2;
var_dump($c); // 0

$n1 = 4;
$n2 = 5;

$c = $n1 <=> $n2;
var_dump($c); // -1


// compatibilidade com caractere unicode
echo "<br>3\u{aa}  colocação";


function cev(int $v):int{ // :int serve para informar o tipo primitivo que irá retornar 
    return $v /2;
}

$r = cev(4);

echo "<p>O resultado é $r</p>";

// operador de qualescencia
$valor = $_GET["num"] ?? 'Nada';
echo "<br>VOCÉ DIGITOU $valor";
?>