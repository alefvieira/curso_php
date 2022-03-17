<?php

$a = 1;
$b = 2;
$c = 3;
$s = 0;
$s++;
--$s;
echo $s;

$s += $a + $b * $c;
echo "</br> $s";

$s *= $s;
echo "</br> $s";


// VARIAVEIS REFERENCIADAS
$d = &$s;

echo "<br/><br/><br/>a variavel a vale $a";
echo "<br/>a variavel b vale $b";
echo "<br/>a variavel c vale $c";
echo "<br/>a variavel d com o & vale $d";

// VARIAVEIS DE VARIAVEIS
$site = "cursoemvideo";
$$site = "/aula";
echo "<br/><br/><br/>O valor da variavel site $site";
echo "<br/> O valor da variavel cursoemvideo $cursoemvideo";
?>
