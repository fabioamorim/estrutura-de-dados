<?php

    include_once("EstruturaDeDados.php");

    class Fila extends EstruturaDeDados{

        function __construct(){
            parent::__construct();
        }

        public function enfileirar($elemento){
            $this->adcionar($elemento);
        }

        public function desenfileirar(){
            
            if($this->estaVazia()){
                return null;
            }

            $elemento = $this->elementos[0];
            $this->deletaPorPosicao(0);
            return $elemento;
        }

        public function primeiroDafila(){
            if($this->estaVazia()){
                return null;
            }

            return $this->elementos[0];
        }
    }