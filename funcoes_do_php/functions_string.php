<?php
    $p = "Leite";
    $pr = 4.5;
    echo "O $p custa R$ ".number_format($pr,2);


    printf("<p>O %s custa R$ %.2f</p>", $p, $pr); 
    // No php é possivel usar funcoes da linguagem C
    // %d = numero inteiro
    // %s = para strings
    // %f = para numeros com casas decimais

    $lista[0] = 1; 
    $lista[1] = 2; 
    $lista[2] = 3; 
    $lista[3] = 4;

    print_r($lista);
    // O print_r é mais usado para fazer testes no código

    $lista2 = array(1,"2",3,4,5,6,7,8,9);
    echo "<br>";
    print_r($lista2);
    echo "<br>";
    var_dump($lista2); // vai mostrar o tipo primitivo de uma variavel
    echo "<br>";
    var_export($lista2);
    echo "<br>";


    $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da funcao wordwrap";
    $r = wordwrap($t,8);
    // wordwrap vai quebrar o texto

    echo $r;

    $r2 = wordwrap($t,8,"<br>\n", false); // o false vai impedir que a quebra de linha seja feito durante uma palavra
    $r3 = wordwrap($t,10,"<br>\n", true); // o false vai impedir que a quebra de linha seja feito durante uma palavra
    
    /*
    printf("<p>O %s custa R$ %.2f</p>", $p, $pr); 
    print_r($lista2);
    var_dump($lista2); // vai mostrar o tipo primitivo de uma variavel
    var_export($lista2);
    
    wordwrap($t,8,"<br>\n", false); // o false vai impedir que a quebra de linha seja feito durante uma palavra
    wordwrap($t,10,"<br>\n", true); // o false vai impedir que a quebra de linha seja feito durante uma palavra; 
    strlen() serve para contar quantos caracteres possui na variavel do tipo string, não funciona em lista
    trim() remove todos os espaços do inicio e fim da variavel
    ltrim() remove todos as espaços do inicio da variavel
    rtrim() remove todos as espaços do final da variavel
    str_word_count($frase, 0 ); serve para contar quantas palavras tem na variavel
    str_word_count($frase, 0 ); o número 0 serve para apenas mostrar quantas palavras tem na variavel
    str_word_count($frase, 1 ); o número 1 serve para mostrar quantas palavras tem na variavel e qual é o indice delas em uma lista de vetor
    str_word_count($frase, 2 ); o número 1 serve para mostrar quantas palavras tem na variavel e qual é o indice em que elas começam
    explode(" ", variavel); esse metodo vai separar a string e vai converter essas separações em valores de uma array " " é o ponto de separação  
    str_split(variavel); esse metodo vai pegar todos os indices de uma variavel e vai separar cada um em uma lista de vetor
    implode("", variavel) esse metodo vai pegar todos os indices de uma lista e vai juntar tudo em uma variavel
    chr(67);  ele serve para identificar a letra pelo codigo  passado pelo paramentro da função
    ord("C"); esse metodo serve para identificar o codigo de uma letra passada pelo parametro
    */
    $txt = "Curso em Vídeo";
    print($txt) ;
    $tamanho = strlen($txt);
    echo "<br>";
    print $tamanho;

    echo "<br><br>";
    $txt2 = "     Curso em Vídeo Com Espaço Ini e Fim     ";
    trim($txt2);
    // resultado: "Curso em Vídeo Com Espaço Ini e Fim"

    ltrim($txt2);
    // resultado: "Curso em Vídeo Com Espaço Ini e Fim     "
    
    rtrim($txt2);

    // resultado: "     Curso em Vídeo Com Espaço Ini e Fim"
    $frase = "Eu vou estudar PHP";
    echo "<p>str_word_count()</p>";
    $cont = str_word_count($frase, 0);
    $cont1 = str_word_count($frase, 1);
    $cont2 = str_word_count($frase, 2);
    
    print $cont;
    echo "<br><br>";
    print_r( $cont1);
    echo "<br><br>";
    print_r( $cont2);


    echo "<br><br>";
    echo "<br><br>";
    echo "explode(\" \", \$site);";
    echo "<br><br>";
    $site = "Curso-em-Video";
    $vetor = explode("-", $site);
    print_r($vetor); 


    echo "<br><br>";
    echo "<br><br>";
    echo "str_split(\$site);";
    $nome = "Maria";
    echo "<br><br>";
    $vetor = str_split($nome);
    print_r($vetor);

    echo "<br><br>";
    echo "<br><br>";
    echo "implode()";
    $vetor2[0] = "Curso";
    $vetor2[1] = "em";
    $vetor2[2] = "Video";
    echo "<br><br>";
    $texto = implode("$",$vetor2);
    print($texto);

    echo "<br><br>";
    echo "<br><br>";
    echo "chr()";

    $texto2 = chr(99);
    echo "<br><br>";
    echo "A letra de codigo 99 tem o código: $texto2 ";
    
    
    echo "<br><br>";
    echo "<br><br>";
    echo "chr()";

    $texto3 = ord("C");
    echo "<br><br>";
    echo "A letra C corresponde ao codigo $texto3 ";

?>
<a href="http://" target="_blank" rel="noopener noreferrer"></a>
