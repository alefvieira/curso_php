
<pre>
    <?php
        // phpinfo(); // esse metodo vai verificar a versão do php
        echo "<h1>ORDEM CRESCENTE </h1>";
        $n = array(2,6,8,2,3,1);
        $variavel = "Alef";
        var_dump($variavel);

        print_r($n);
        echo "<br>";
        sort($n);
        print_r($n);

        $n2 = array(xuxa,carlos,douglas,rua, raul,xaxa);
        print_r($n2);
        echo "<br>";
        sort($n2);
        print_r($n2);



        echo "<h1>ORDEM DECRESCENTE </h1>";
        rsort($n);
        print_r($n);

        $n2 = array(xuxa,carlos,douglas,rua, raul,xaxa);
        print_r($n2);
        echo "<br>";
        rsort($n2);
        print_r($n2);


        echo "<h1>ORDEM ASSOCIATIVA CRESCENTE</h1>";
        $n = array(2,6,8,2,3,1);
        // o metodo associativo deixa na ordem crescente mas que mantem o indice original 
        asort($n);
        print_r($n);

        $n2 = array(xuxa,carlos,douglas,rua, raul,xaxa);
        print_r($n2);
        echo "<br>";
        asort($n2);
        print_r($n2);


        echo "<h1>ORDEM ASSOCIATIVA DECRESCENTE</h1>";
        $n = array(2,6,8,2,3,1);
        // o metodo associativo deixa na ordem crescente mas que mantem o indice original 
        arsort($n);
        print_r($n);

        $n2 = array(xuxa,carlos,douglas,rua, raul,xaxa);
        print_r($n2);
        echo "<br>";
        arsort($n2);
        print_r($n2);


        echo "<h1>ORDEM DE CHAVE CRESCENTE</h1>";
        $n = array( 2 => 3, 1 => 5, 3 => 8, 4 => 2);
        // o metodo associativo deixa na ordem crescente mas que mantem o indice original 
        ksort($n);
        print_r($n);

        $n2 = array(xuxa,carlos,douglas,rua, raul,xaxa);
        echo "<br>";
        ksort($n2);
        print_r($n2);


        echo "<h1>ORDEM DE CHAVE DECRESCENTE</h1>";
        $n = array( 2 => 3, 1 => 5, 3 => 8, 4 => 2);
        // o metodo associativo deixa na ordem crescente mas que mantem o indice original 
        krsort($n);
        print_r($n);

        $n2 = array(xuxa,carlos,douglas,rua, raul,xaxa);
        echo "<br>";
        krsort($n2);
        print_r($n2);

    ?>
</pre>
