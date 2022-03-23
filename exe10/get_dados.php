<?php
    $num = ($_GET["n"] != 0) ? $_GET["n"] : 0;

    for($i = 1; $i <= 10;$i++){ 
        $valor = $num * $i;
        print "<h2>$num x $i = $valor </h2>";
    }
    
?>
<br><a href="form_tabuada.php">Voltar</a>