<?php
class Programador extends Pessoa{
    protected $lingagem;

    public function __construct($tmpnome, $tmpLiguagem){
        $this-> nome = $tmpnome;
        $this->lingagem = $tmpLiguagem;

        echo "<br>Objeto <strong>".__CLASS__."</strong> foi instanciado.<br> ";
    }
    public function getLinguagem(){
        return $this->lingagem;
    }
}
/*
Tabela constantes mágicas
Constantes mágicas

__LINE__
Retorna o número da linha do script na qual ela foi declarada.

__FILE__
Retorna o caminho do arquivo PHP.

__DIR__
Retorna o diretório.

__FUNCTION__
Retorna a function a qual foi declarada.

__CLASS__
Retorna a class a qual foi declarada.

__METHOD__
Retorna a classe e o método a qual foi declarada.

__NAMESPACE__
Retona o namespace a qual foi declarada.

*/