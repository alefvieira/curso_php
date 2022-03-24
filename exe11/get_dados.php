<?php

    $a = $_GET["n1"];
    $b = $_GET["n2"];

    function soma($a,$b){
        return $a + $b;
    }
    print "A soma vale". soma($a,$b)."<br>";
?>

<a href="form_function.php">Voltar</a>