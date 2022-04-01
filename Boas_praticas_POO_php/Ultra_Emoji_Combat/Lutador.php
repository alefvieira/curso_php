<?php
    class Lutador
    {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        private function  getNome(){return $this->nome;}
        private function  getNacionalidade(){return $this->nacionalidade;}
        private function  getIdade(){return $this->idade;}
        private function  getAltura(){return $this->altura;}
        private function  getPeso(){return $this->peso;}
        private function  getCategoria(){return $this->categoria;}
        private function  getVitorias(){return $this->vitorias;}
        private function  getDerrotas(){return $this->derrotas;}
        private function  getEmpates(){return $this->empates;}

        private function setNome($n){$this->nome = $n; }
        private function setNacionalidade($n){$this->nacionalidade = $n; }
        private function setIdade($n){$this->idade = $n; }
        private function setAltura($n){$this->altura = $n; }
        private function setPeso($n){
            $this->peso = $n; 
           $this->setCategoria($n);
        }
        
        private function setCategoria($n){
            if(($n < 52.2) || ($n >= 120.2))   $this->categoria = "Inválido";
            
            elseif($n <= 70.3)  $this->categoria = "Leve";

            elseif($n <= 83.9) $this->categoria = "Médio";

            else $this->categoria = "Pesado";
        }
        
        private function setVitorias($n){$this->vitorias = $n; }
        private function setDerrotas($n){$this->derrotas = $n; }
        private function setEmpates($n){$this->empates = $n; }

        function __construct($no, $nac, $age, $alt, $pes, $vit, $der, $emp)
        {
            $this->nome = $no;
            $this->nacionalidade = $nac;
            $this->idade = $age;
            $this->altura =  $alt;
            $this->vitorias =  $vit;
            $this->derrotas = $der;
            $this->empates = $emp;
            $this->setPeso($pes);
        } 

        public function apresentar()
        {
            echo "
            <p>Lutador: {$this->getNome()}</p>
            <p>Origem: {$this->getNacionalidade()}</p>
            <p>Tem {$this->getIdade()} anos</p>
            <p>{$this->getAltura()} m de altura</p>
            <p>{$this->getPeso()} Kg</p>
            <p>{$this->getVitorias()} Vitórias</p>
            <p>{$this->getEmpates()} Empates</p>
            <p>{$this->getDerrotas()} Derrotas</p>
            ";
        }
        public function status()
        {
            echo "
            <p>{$this->getNome()}</p>
            <p>É um peso {$this->getCategoria()}</p>
            <p>{$this->getVitorias()} Vitórias</p>
            <p>{$this->getEmpates()} Empates</p>
            <p>{$this->getDerrotas()} Derrotas</p>
            ";
        }


        public function ganharLuta()
        {
            $this->setVitorias = $this->getVitorias() + 1;
        }
        public function perderLuta()
        {
            $this->setDerrotas = $this->getDerrotas() + 1;
        }
        public function empatarLuta()
        {
            $this->setEmpates = $this->getEmpates() + 1;
        }

    }
