<?php 
    class ContaBanco {

        public $numConta; // int
        protected $tipo; // string (cc ==> 50 ou cp ==> 150)
        private $dono; // string
        private $saldo; // float
        private $status; // boolean

        public function abrirConta() {
            $this->status = true;
            if ($this->tipo == "cc") {
                $this->saldo = 50;
            } else if ($this->tipo == "cp") {
                $this->saldo = 150;
            }
        }
        public function fecharConta() {
            if ($this->saldo > 0) {
                echo "<p>Conta com dinheiro</p>";
            } else if ($this->saldo < 0) {
                echo "<p>Conta em débito</p>";
            } else {
                $this->status = false;
            }
        }
        public function depositar() {
            if ($this->status) {
                $this->saldo += $v;
            } else {
                echo "<p>Conta fechada</p>";
            }
        }
        public function sacar() {
            if ($this->status) {
                if ($this->saldo >= $v) {
                    $this->saldo -= $v;
                } else {
                    echo "<p>Saldo insuficiente</p>";
                }
            } else {
                echo "<p>Conta fechada</p>";
            }
        }
        public function pagarMensal() { // (cc ==> 50 ou cp ==> 150)

        }

        public function getNumConta() {
            return $this->numConta;
        }
        public function setNumConta($nc) {
            $this->numConta = $nc;
        }
        public function getTipo() {
            return $this->tipo;
        }
        public function setTipo($t) {
            $this->tipo = $t;
        }
        public function getDono() {
            return $this->dono;
        }
        public function setDono($d) {
            $this->dono = $d;
        }
        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($v) {
            $this->saldo = $v;
        }
        public function getSetatus() {
            return $this->status;
        }
        public function setStatus($st) {
            $this->status = $st;
        }
    }
?>