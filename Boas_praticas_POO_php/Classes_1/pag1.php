<?php
    /*
    +   atributos, variaveis e metodos publico (pode ser acessado de qualquer lugar)
    -   atributos, variaveis e metodos private (só pode ser acessado pelo lugar que o declarou )
    #   atributos, variaveis e metodos protegido (a classe atual e todas as sub-classes)
    */
    require_once "Caneta.php";

    $c1 = new Caneta;
    $c1 -> cor = "Blue";
    //$c1 -> ponta = 0.5;
    //$c1 -> tampada = false;
    $c1 -> tampar();
    $c1->rabiscar();

    var_dump($c1);

    $c2 = new Caneta;
    $c2 -> cor = "Red";
    //$c2 -> ponta = 0.5;
    //$c2 -> tampada = false;
    $c2 -> tampar();
    $c2->rabiscar();
    
    var_dump($c2);
    echo "<a href='pag2.php'>Ir para a pag2</a>";

