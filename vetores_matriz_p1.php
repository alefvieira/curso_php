<pre>
    <?php
    // Formas de declarar arrays

    $n = array(3,5,8,2); // forma de declarar variavel 
    $n[] = 7; // com o colchete vazio é adicionado um novo indice na array

    print_r($n);

    ?>
</pre>

<pre>
    <table border="1" >
    <?php
        $c = range(0,20,2); // o range funciona igual ao range do python o primeiro parametro é indice inicial, o segundo é o final e o terceiro é o contador de quantos em quantos que os número irão pular
        // print_r($c);

        foreach( $c as $v){
            echo "<td> $v </td> ";
        }
    ?>
    </table>
</pre>

<pre>
    <?php
        $v2 = array(1 =>"A",3 =>"B",6 =>"C",8 =>"D"); // essa é uma forma de  associação de valores, os números representam o indice que será ocupado pelo seu valor
        $v2[] = "E"; // quando adiciona um valor em uma array essa valor será ocupado pelo próximo indice da lista, ou seja, vai ser adicionado no indice [9]
        
        // para remover um indice basta usar unset($v2[1])
        
        print_r($v2);
        unset($v2[1]);
        print_r($v2);


    ?>
</pre>

<pre>
    <?php
    // esse metodo serve para pegar os valores e atribui-los no terminal
        $cad = array(
            'nome' => "Álef",
            'idade' => 23,
            'peso' => 78.5,
        );

       foreach($v2 as $y => $cad){
        echo "O campo $y possui o conteudo  $cad<br>";
       }
       $m = array(
        array(6,4),
        array(4,9),
        array(3,2),
       );

       print_r($m)
    ?>
</pre>

<pre>
    <?php
    // matriz
        $n = array(
            array(1,2,3),
            array(4,5,6),        
        )
       
    ?>
</pre>

