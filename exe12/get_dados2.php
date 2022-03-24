<?php

    $a = $_GET["n1"];
    $b = $_GET["n2"];
    $c = $_GET["n3"];
    $d = $_GET["n4"];
    $e = $_GET["n5"];

    function soma(){
        $p = func_get_args();
        // func_get_args(); serve para pegar os valores dos parametros

        $tot = func_num_args();
        // func_num_args(); serve para contar quantos caracteres, valores possui nos parametros
        $s = 0;
        for($i=0;$i < $tot;$i++){
            $s+=$p[$i];
        }
        return $s;
    }
    
    print "A soma vale". soma($a,$b, $c,$d,$e)."<br>";
?>

<a href="form_function2.php">Voltar</a>