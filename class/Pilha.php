<?php

    include_once("EstruturaDeDados.php");

    class Pilha extends EstruturaDeDados{

        function __construct(){
            parent::__construct();
        }

        public function empilhar($elemento){
            $this->adcionar($elemento);
        }

        public function desempilhar(){
            
            if($this->estaVazia()){
                return null;                                
            }
            return $this->elementos[--$this->tamanho];
        }

        public function topoDaPilha(){

            if($this->estaVazia()){
                return null;                                
            }
            return $this->elementos[$this->tamanho - 1];
        }
    }