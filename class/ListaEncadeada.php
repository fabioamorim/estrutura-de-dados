<?php

    require_once("Celula.php");

    class ListaEncadeada{

        private $primeira = null;
        private $ultima = null;
        private $tamanho = 0;

        public function adcionar($elemento){

            $nova = new Celula($elemento,$this->primeira);
            $this->primeira = $nova;

            if($this->tamanho == 0){
                $this->ultima = $this->primeira;
            }

            $this->tamanho ++;
        }

        public function adcionaFim($elemento){
            if($this->tamanho == 0){
                $this->adciona($elemento);
            }else{
                $nova = new Celula($elemento,null);
                $this->ultima->setProxima($nova);
                $this->ultima = $nova;
                $this->tamanho ++;
            }
        }

        public function adcionaPosicao($elemento,$posicao){

            if(is_null($this->verificaPosicaoValida($posicao))){
                return false;
            }

            if($this->tamanho == 0){
                $this->adciona($elemento);
            }else{
                $anterior = $this->coletaCelula($posicao -1);
                $celula = new Celula($elemento,$anterior->getProxima());

                $anterior->setProxima($celula);

                $this->tamanho++;
            }

            return true;
        }

        public function buscar($posicao){
            if(!$this->verificaPosicaoValida($posicao)){
                return "null";
            }

            return $this->coletaCelula($posicao)->getElemento();
        }

        public function removeComeco(){
            if($this->tamanho == 0){
                return false;
            }

            $this->primeira = $this->primeira->getProxima();
            $this->tamanho --;

            if($this->tamanho == 0){
                $this->ultima = null;
            }

            return true;
        }

        public function tamanho(){
            return $this->tamanho;
        }

        private function coletaCelula($posicao){

            if(!$this->verificaPosicaoValida($posicao)){
                return null;
            }    
            
            $atual = $this->primeira;

            for($i=0;$i<$posicao;$i++){
                $atual = $atual->getProxima();
            }

            return $atual;
        }

        private function verificaPosicaoValida($posicao){
            return $posicao >= 0 && $posicao < $this->tamanho;                
        }

        public function exibeElementos(){
           
           if($this->tamanho == 0){
               return "[]";
           }

           $atual = $this->primeira;
           $resultado = "";
           $resultado .= "[";

           for($i=0;$i<$this->tamanho;$i++){
                $resultado .= $atual->getElemento();
                $resultado .= ",";

                $atual = $atual->getProxima();
           }

           $resultado .= "]";

           return $resultado;
        }

    }