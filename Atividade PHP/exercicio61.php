<?php

    class Nota{
        private int $id;
        private String $nome;
        private String $detalhes;
        private int $quantidade = 0;
        private float $valor;
        private float $desconto;

        public function __construct(){ } 

        public function setValor(float $value) {
            $this->valor= $value;
        }
        public function setDetalhes($value) {
            $this->detalhes= $value;
        }
        public function setQuantidade($value) {
            $this->quantidade = $value;
        }

        public function getID() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getDetalhes() {
            return $this->detalhes;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function getValor(): float {
            return $this->valor;
        }

        public function getDesconto() {
            return $this->desconto;
        }

        public function calcAccount(): float {
            return $this->quantidade * $this->valor;
        }

    }

    $nota = new Nota();
    $nota->setValor(50,50);
    $nota->setQuantidade(2);
    echo "Valor Total: ".$nota->calcAccount();

?>