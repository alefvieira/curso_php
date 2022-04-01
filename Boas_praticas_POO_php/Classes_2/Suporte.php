<?php
    class Suporte
    {
        // Métodos Acessores (GETTERS)
        // Métodos Modificadores (SETTERS)
        // Método Construtor serve para executar funções automaticamente sem a interferência de terceiros
        // metodo que é executado automaticamente, muito utilizado para colocar valores como padrão
        private $tecnico;
        private $chamado;
        private $desc;
        private $cliente;


        public function Suporte($w, $x, $y, $z) // metodo construtor
        {
            $this-> tecnico = $w;
            $this-> chamado = $x;
            $this-> desc    = $y;
            $this-> cliente = $z;
            $this-> tempo = 1;

        }

        public function getTecnico() {return $this-> tecnico;}
        public function setTecnico($n) {$this-> tecnico = $n;}

        public function getChamado() {return $this-> chamado;}
        public function setChamado($n) {$this-> chamado = $n;}

        public function getDesc() {return $this-> desc;}
        public function setDesc($n) {$this-> desc = $n;}

        public function getCliente() {return $this-> cliente;}
        public function setCliente($n) {$this-> cliente = $n;}
        
    }
