<?php
    require_once "Controlador.php";
    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;
        
        public function __construct()
        {
            $this-> volume = 50;
            $this-> ligado = false;
            $this-> tocando = false;
        }
        private function getVolume() { return $this-> volume;}
        private function getLigado() { return $this-> ligado;}
        private function getTocando() { return $this-> tocando;}

        private function setVolume($v) { $this-> volume = $v;}
        private function setLigado($l) { $this-> ligado = $l;}
        private function setTocando($t) { $this-> tocando = $t;}

        // LIGAR
        public function ligar() 
        {
            $this-> setLigado(true);
        }
        //DESLIGAR
        public function desligar() 
        {
            $this-> setLigado(false);
        }
        //ABRE MENU
        public function abrirMenu() 
        {
            if($this->getLigado()){
                echo "<br> Está ligado? ".($this->getLigado()? "SIM" : "NÃO");
                echo "<br> Está tocando: ".($this->getTocando()? "SIM": "NÃO");
                echo "<br> Volume: ". $this->getVolume();
            }else echo "Controle desligado";
            
        }
        //FECHAR MENU
        public function fecharMenu() 
        {
            echo "<h3> Fechar Menu </h3>";
        }

        public function maisVolume() 
        {
            if (($this->getLigado()) && ($this->getVolume() < 50) ) $this->setVolume( $this->getVolume() + 5);
        }

        public function menosVolume() 
        {
            if (($this->getLigado()) && ($this->getVolume() > 0) ) $this->setVolume( $this->getVolume() - 5);
        }

        // VALUMES
        public function ligarMudo() 
        {
            if($this-> getLigado() === true) $this-> setVolume(0);
        }
        public function desligarMudo() 
        {
            if($this-> getLigado() === true) $this-> setVolume(50);
        }

        //REPRODUÇÃO DE SOM
        public function play() 
        {
            if(($this->getTocando() === false) && ($this-> getLigado() === true)) $this-> setTocando(true);
        }
        public function pause() 
        {
            if(($this->getTocando() === true) && ($this-> getLigado() === true)) $this-> setTocando(false);
        }

    }

