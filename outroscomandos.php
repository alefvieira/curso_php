<?php
$pagina = 'home';

$se = ($_GET['i'] ?? null);

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
    echo $pagina;
}else{
    $pagina = 'home';
    echo 'vazio';
}

?>