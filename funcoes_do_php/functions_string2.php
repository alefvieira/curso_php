<?php
    $nome = "ÁlEf COUtInhO";
    $nomeminusc = mb_strtolower($nome);
    echo "<p>Seu nome minisculo fica $nomeminusc </p>"; 
    
    $nomeMAIUSC = mb_strtoupper($nome);
    echo "<p>Seu nome MAÚSCULO fica $nomeMAIUSC </p>"; 


    $nome2 = "alef coutinho";
    
    $nomefirst  = ucfirst($nome2);
    print("<p>Seu nome é $nomefirst</p>");

?>  