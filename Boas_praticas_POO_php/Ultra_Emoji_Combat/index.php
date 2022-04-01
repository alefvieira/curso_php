<?php

// peso leve 
// peso médio 
// peso pesado

require_once "Lutador.php";


$lutadores[] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9,  11, 2, 1);

$lutadores[] = new Lutador("Putscript","Brasil", 29, 1.68, 57.8, 14, 2, 3);

$lutadores[] = new Lutador("Ufocobol","Brasil", 37, 1.7, 119.3,  5, 4, 3);  

$lutadores[] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

$lutadores[] = new Lutador("Luffytaro", "Brasil", 30, 1.81, 60, 16, 3, 2);

$lutadores[] = new Lutador("Zoro-Nissan", "Japão", 30, 1.81, 78, 12, 2, 0);

$lutadores[0]->apresentar();
echo "<br><br>";

$_SESSION = $lutadores ;
var_dump($_SESSION[0]);

// foreach($lutadores as $i){
//     var_dump($i);
// }
