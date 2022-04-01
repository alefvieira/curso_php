<?php
    require_once "Banco.php";
    $jubileu = new Banco();

    $jubileu->abrirConta("Jubileu da Costa", "123456789-00", "1234567", 'cp');
    // $jubileu->ativarConta();
    // $jubileu->fecharConta();
    $jubileu->depositarNaConta(1000.65);
    // $jubileu->sacarDaConta(1590);
    $jubileu->pagarMensal();

    var_dump($jubileu);

    $Creuza = new Banco();
    $Creuza->abrirConta("Creuza da Costa Nudes", "123456000-00", "147889", 'cc');
    var_dump($Creuza);
    // abriConta
    // cc  conta corrente ao abrir vai ganhar 50 reais
    // cp  conta poupança ao abrir vai ganhar 150 reais
    
    //fecharConba 
    // não pode está com saldo negativo ou positivo, é necessário sacar o dinheiro que estiver nela

    //depositar
    // a conta precisa estar ativa

    // sacarDinheiro
    // precisa haver dinheiro na conta
    // conta tem que estar ativa
    // não permitir sacar mais do que tem em conta

    // pagarMensal
    // cc vai pagar 12 reias de mensalidade
    // cp vai pagar 20 reais de mensalidade


