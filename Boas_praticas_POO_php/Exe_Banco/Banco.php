<?php

    class Banco
    {
        
        private $nome;
        private $cpf;
        public  $numConta;
        protected $tipoConta; 
        private $saldo;
        private $status;

        public function getNome(){return $this->nome;;}
        public function setNome($n){$this->nome = $n;}

        public function getCpf(){ return $this-> cpf;}
        public function setCpf($n){$this-> cpf = $n;}

        public function getTipoConta(){ return $this-> tipoConta;}
        public function setTipoConta($n){$this-> tipoConta = $n;}

        public function getSaldo(){ return $this-> saldo;}
        public function setSaldo($n){$this-> saldo = $n;}

        public function getStatus(){ return $this-> status;}
        public function setStatus($n){$this-> status = $n;}

        function Banco(){
            $this-> status = false;
            $this-> saldo = 0;
        } 


        public function abrirConta($nome, $cpf, $nconta, $tconta)
        {
            $this-> nome = $nome;
            $this-> cpf = $cpf;
            $this-> numConta = $nconta;
            $this-> tipoConta = $tconta;
            
            $this->ativarConta();

            if($this-> tipoConta === "cc") $this->saldo = 50;
            else $this->saldo = 150;
        }
        public function fecharConta()
        {

            if(($this-> status === true) && ($this-> saldo === 0)) $this-> status = false;
            elseif($this-> saldo < 0) echo "Saldo negativo";
            else echo "Você está com dinheiro na conta, saque tudo primeiro e depois tente fecha-la";
        }
        public function depositarNaConta($valor)
        {
            if($this-> status === true) $this-> saldo = $this-> getSaldo() + $valor;
            else echo "Conta desativada";
        }
        public function sacarDaConta($valor)
        {
            if(($this-> saldo >= $valor) && ($this-> status === true)) $this-> saldo = $this->getSaldo() - $valor;
            else echo "O saldo é insuficiente para a retirada";
        }
        public function pagarMensal()
        {
            if(($this-> tipoConta === "cc") && ($this-> status === true)) $this-> saldo - 12;
            elseif(($this-> tipoConta === "cp") && ($this-> status === true)) $this-> saldo - 20;
        }

        public function ativarConta(){
            $this->status = true;
        }
    }
