<?php 
    class Caneta {
        private $modelo; // string
        private $cor; // string
        private $ponta; // float
        private $tampada; // boolean

        public function __construct() {
            $this->cor = "Azul";
            $this->tampar();
        }
        
        public function tampar() {
            $this->tampada = true;
        }
        public function getModelo() { 
            return $this->modelo;
        }
        public function setModelo($m) {
            $this->modelo = $m;
        }
        public function getPonta() {
            return $this->ponta;
        }
        public function setPonta($p) {
            $this->ponta = $p;
        }
    }




?>
