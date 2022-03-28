<?php

require_once "Pessoa.php";
require_once "Programador.php";

require_once "Connect.php";
require_once "Connect2.php";

$programador = new Programador("Álef","PHP");



echo "<br>". $programador->getNome();
echo "<br>". $programador->getLinguagem();

echo $programador::ESPECIE; // para chamar uma const se usa ::variavelconst


// namespace = caso exista o nome de funções iguais em diferentes arquivos se deve usar namespace, ele serve para chamar essas fuções de forma que seja referenciada de onde está vindo 
// ConectarBanco é o nome da variavel do tipo namespace
ConectarBanco\conectar();
ConectarSite\conectar();
?>