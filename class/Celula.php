<?php

    class Celula{

        private $elemento;
        private $proxima;

        function __construct($elemento,$proxima){
            $this->elemento = $elemento;
            $this->proxima = $proxima;
        }

        public function setProxima($proxima){
            $this->proxima = $proxima;
        } 

        public function getProxima(){
            return $this->proxima;
        }

        public function getElemento(){
            return $this->elemento;
        }
        
    }