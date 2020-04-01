<?php

    class CelulaDupla{

        private $elemento;

        private $proxima;
        private $anterior;

        function __construct($elemento,$proxima){
            $this->elemento = $elemento;
            $this->proxima = $proxima;
        }

        public function getProxima(){
            return $this->proxima;
        }

        public function setProxima($proxima){
            $this->proxima = $proxima;
        } 
        
        public function getAnterior(){
            return $this->anterior;
        }

        public function setAnterior($anterior){
            $this->anterior = $anterior;
        }

        public function getElemento(){
            return $this->elemento;
        }
        
    }
