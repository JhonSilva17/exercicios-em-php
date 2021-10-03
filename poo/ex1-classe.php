<?php 

    class Salario {
        protected $salarioBruto;
        protected $horasExtras;
        protected $numHorasExtras;

        // Métodos
        public function salarioFinal() {
            $valorHorasExtras = ($this -> horasExtras * $this -> numHorasExtras);
            $salarioLiquido =$this -> salarioBruto + $valorHorasExtras;
            $desconto = ($salarioLiquido * 8) / 100;
            $salarioFinal = $salarioLiquido - $desconto;

            return number_format($salarioFinal, 2, ',', '.');
        }

        // Métodos especiais
        public function setSalarioBruto($num) {
            $this -> salarioBruto = $num;
        }   
        public function getSalarioBruto() {
            return number_format($this -> salarioBruto, 2, ',', '.');
        }

        public function setHorasExtras($h) {
            $this -> horasExtras = $h;
        }
        public function getHorasExtras() {
            return $this -> horasExtras;
        }

        public function setNumHorasExtras($n) {
            $this -> numHorasExtras = $n;
        }
        public function getNumHorasExtras() {
            return number_format($this -> numHorasExtras, 2, ',', '.');
        }
    }