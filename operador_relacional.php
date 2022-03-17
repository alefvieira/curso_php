
<?php 


// OPERADOR UNÁRIO
$a = 10;
$b = 65;
$c = 30;
$d = "30";
$maior = $a >$b? "$a é maior que $b" : "$b é maior ou igual a $a";
echo $maior. "<br/>";

$iguais =  ($c == $d) ? "SIM" : "NÃO";
echo "<br/>As variaveis são iguais? $iguais";

$iguais2 =  ($c === $d) ? "SIM" : "NÃO";
echo "<br/>As variaveis são iguais e possui o mesmo tipo primitivo ? ". (($c === $d) ? "SIM" : "NÃO");

?>