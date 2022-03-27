<pre>
    <?php

        $n = array(0 => 3, 1 => 5, 2 => 8, 3 => 2);


        // o metodo count serve para contar quantos indices possui uma array, matriz, ou objeto
        echo "<br>count conta quantos indices tem na array ";
        echo "<br>possui lista n tem = ".count($n)." indices";

        echo "<br>array_push e array_pop";
        // para adicionar valores nas arrays se usa array_push
        array_push($n,7);
        array_pop($n); // para remover o ultimo indice da array se usa pop
        echo "<br>unset serve para remover indices de uma lista";
        unset($n[count($n)-1]); // remove qualquer indice de uma lista
        print_r($n); 
            echo "<br>array_unshift adiciona no primeiro indice da lista";
        array_unshift($n,7); // esse metodo vai adicionar um indice no inicio do vetor
        print_r($n); 
        echo "<br> array_shift remove o primeiro indice da lista";
        array_shift($n); // esse metodo vai adicionar um indice no inicio do vetor
        print_r($n); 

    ?>
</pre>