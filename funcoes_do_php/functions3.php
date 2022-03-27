<?php
// strrev($nome) é o metodo que deixa a vairiavel de trás para frente
// strpos($frase, "PHP" ); é o metodo que localiza o indice na posição que se encontra uma substring
// stripos($frase, "php" ); é o metodo que localiza o indice na posição que se encontra uma substring, mas sem fazer istinção de caracterer maiusculo e minusculo
// substr_count() esse metodo vai contar quantas vezes foi feito repetido uma variavel
// substr($site, 0,5); é o metodo que faz seja feito um recorte do da variavel, ex.: do indice 0 ao indice 5 será mostrado e o resto vai ser cortado
// str_repeat("Php",5);



$nome = "Alef VIeira";
$nomeNew = ucwords(strtolower($nome));

echo "<h3>$nomeNew </h3>";

$nomeNew2 = strrev($nome);
echo "<h3>$nomeNew2 </h3>";

$frase= "Estou aprendendo PHP";
$pos = strpos($frase, "PHP" );
echo "<h3>a String PHP foi encontrada na posição $pos </h3>";

$frase = "Estou aprendendo PHP no Curso em Vídeos de PHP";
$cont = substr_count($frase, "PHP");
print("<h3>PHP encontrado $cont vezes</h3>");


$site = "Curso em Video";
$sub = substr($site, 0,5);
echo "<h3>$sub </h3>" ;

$novo = str_pad($nome, 30," ", STR_PAD_RIGHT);
$novo = str_pad($nome, 30," ", STR_PAD_LEFT);
$novo = str_pad($nome, 30," ", STR_PAD_CENTER);
print("<h3>Eu $novo é lindo!! </h3>");

$txt = str_repeat("Php",5);
print("<h3>  O texto gerado foi $txt");
print(str_repeat("-",20));

print("<h3>  O texto gerado foi $txt</h3>");

$frase3 = "Gosto de TADS";
$newFrase = str_replace("TADS", "Matemática",$frase3);
echo "<h3>$newFrase</h3>";

$newFrase = str_ireplace("TADS", "Matemática é muito bom", $frase3);
echo "<h3>$newFrase</h3>";

?>

