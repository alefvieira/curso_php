<?php
    // diferenças entre INCLUDE x REQUIRE
    // O include ele pode chamar arquivos externos caso não seja encontrado o conteudo interno, ou o arquivo não seja localizado, o codigo vai continuar sendo executado
    // Já o require é obrigatorio ter o conteudo ou o arquivo precisa ser identificado, caso não isso não aconteça dará erro
    // include "../funcoes_ratinas_.php";
    require "../funcoes_ratinas_.php";

    // O INCLUDE_ONCE OU O REQUIRE_ONCE servem para redeclararem o require ou o include, ou caso anda não tenha sido incluido ou requerido, vai fazer pela primeira vez
    require_once "../funcoes_ratinas_.php";
    include_once "../funcoes_ratinas_.php";

    echo "<h1>Testando novas funcoes </h1>";
    ola();
    mostraValor(5);
?>