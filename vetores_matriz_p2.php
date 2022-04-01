<pre>
    <?php
        // '=>' serve para atribuir, já o número que veio antes será o número ou nome do indice do valor
        // Array
        // (
        //     [0] => 3
        //     [1] => 5
        //     [2] => 8
        //     [3] => 2
        // )
        $n = array(0 => 3, 1 => 5, 2 => 8, 3 => 2);

        print_r($n);

        $n2 = array( 
            array( 'n1' => 3, 'n2' => 5, 'n3' => 8, 'n4' => 2),
            array( 'n11' => 3, 'n22' => 5, 'n33' => 8, 'n44' => 2),
        );

        $n3 = "Alef Vieira Coutinho";
        print_r(str_split($n3)); // transforma cada caracteres em volores em uma array
        $n[] = 11;
        
        print_r($n);

        print_r($n2);
        var_dump($n2);
        // Array(
        //     [n1] => 3
        //     [n2] => 5
        //     [n3] => 8
        //     [n4] => 2
        // )
            
        // o metodo count serve para contar quantos indices possui uma array, matriz, ou objeto
        echo " qtd de indices da matriz ". count($n2[0]);
        echo "<br>".count(str_split($n3));
        echo "<br> array_push e array_pop";
        // para adicionar valores nas arrays se usa array_push
        array_push($n,7);
        array_pop($n); // para remover o ultimo indice da array se usa pop
        echo "<br> unset";
        unset($n[count($n)-1]); // remove qualquer indice de uma lista
        print_r($n); 
            echo "<br> array_unshift adiciona no primeiro indice da lista";
        array_unshift($n,7); // esse metodo vai adicionar um indice no inicio do vetor
        print_r($n); 
        echo "<br> array_shift remove o primeiro indice da lista";
        array_shift($n); // esse metodo vai adicionar um indice no inicio do vetor
        print_r($n); 

    ?>
</pre>
