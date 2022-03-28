<pre>
    <?php

    class Pessoa{

        // public = pode ser acessada por qualquer pessoas
        // private = só pode ser acessado dentro dessa class
        // protected = só pode ser acessado pela class e por propriedades que herdam suas propriedade

        protected $nome;
        const ESPECIE = "Humano";
        
        public function __construct($tmpnome){
            $this-> nome = $tmpnome;
        }
        
        public function setNome($novoNome){
            $this -> nome = $novoNome;
        }
        public function getNome(){
            return $this-> nome;
        }

    }


    ?>
</pre>