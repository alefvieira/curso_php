<?php
    $numI = $_GET["numI"] ;
    $numF = $_GET["numF"];
    $emqq = $_GET["emqq"];

    echo "[ $numI  $numF  $emqq ]";

    if($numI < $numF){
        for($i = $numI ; $i <= $numF ;$i = $i + $emqq){
            echo "$i , ";
        }
    }else{
        for($i = $numI ; $i >= $numF ;$i = $i - $emqq){
            echo " $i ,";
        }
    }
    $fatorial = 1 ;
    for($r = $numF; $r >=1; $r--){
        $fatorial = $fatorial * $r;

    }
    echo "<br>O fatorial de $numF! é $fatorial <br>";
?>
<a href="form_incrementando.php">voltar</a>