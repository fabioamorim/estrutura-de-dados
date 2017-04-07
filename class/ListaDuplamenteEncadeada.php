<?php

    require_once("CelulaDupla.php");

    class ListaDuplamenteEncadeada{

        private $primeira = null;
        private $ultima = null;
        private $tamanho = 0;

        public function adcionar($elemento){
                        
            if($this->tamanho == 0){
                $nova = new CelulaDupla($elemento,$this->primeira);
                $this->ultima = $nova;
            }else{
                $nova = new CelulaDupla($elemento,$this->primeira);
                $this->primeira->setAnterior($nova);                
            }

            $this->primeira = $nova;
            $this->tamanho ++;
        }

        public function adcionaFim($elemento){
            if($this->tamanho == 0){
                $this->adciona($elemento);
            }else{
                $nova = new CelulaDupla($elemento,null);
                $this->ultima->setProxima($nova);
                $nova->setAnterior($this->ultima);
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
                $celulaAnterior = $this->coletaCelula($posicao - 1);
                $celulaPosterior = $this->coletaCelula($posicao);

                $celulaAtual = new CelulaDupla($elemento,$celulaAnterior->getProxima());
                $celulaAnterior->setProxima($celulaAtual);
                $celulaAtual->setAnterior($celulaAnterior);
                $celulaPosterior->setAnterior($celulaAtual);

                $this->tamanho++;
            }

            return true;
        }

        public function buscar($posicao){
            if(!$this->verificaPosicaoValida($posicao)){
                return null;
            }

            return $this->coletaCelula($posicao)->getElemento();
        }

        public function buscaPorElemento($elemento){
            
            $atual = $this->primeira;

            for($i = 0;$i<$this->tamanho;$i++){
                if($atual->getElemento() == $elemento){
                    return true;
                }

                $atual = $atual->getProxima();
            }
            return false;
        }

        public function removeComeco(){
            if($this->tamanho == 0){
                return "Não há elementos na lista";
            }

            $retirado = $this->primeira->getElemento();
            $this->primeira = $this->primeira->getProxima();
            $this->primeira->setAnterior(null);
            $this->tamanho --;

            if($this->tamanho == 0){
                $this->ultima = null;
            }

            return $retirado;
        }

        public function removeFim(){

            if($this->tamanho == 0){
                return "Não há elementos na lista";
            }
            
            $retirado = $this->ultima->getElemento(); 
            $this->ultima = $this->ultima->getAnterior();
            $this->ultima->setProxima(null);
            $this->tamanho --;

            if($this->tamanho == 0){
                $this->ultima = null;
            }

            return $retirado;
            
        }

        public function removePosicao($posicao){

            if(!$this->verificaPosicaoValida($posicao)){
                return "Posicao inválida!";
            }else if ($this->tamanho == 1){

                $this->proxima = null;
                $this->ultima = null;
                $this->tamanho = 0;

                return "Não há elementos na lista";
            }

            if($posicao == 0){
               return $this->removeComeco();
            }else if($posicao == $this->tamanho-1){
               return $this->removeFim();
            }else{

               $celulaAtual = $this->coletaCelula($posicao);
               $celulaPosterior = $celulaAtual->getProxima();
               $celulaAnterior = $celulaAtual->getAnterior();

               $celulaAnterior->setProxima($celulaPosterior);
               $celulaPosterior->setAnterior($celulaAnterior);

               $this->tamanho --;

               return $celulaAtual->getElemento();

            }

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

        public function exibeElementoCompleto($posicao){
           
            if(!$this->verificaPosicaoValida($posicao)){
                return null;
            }

            $celula = $this->coletaCelula($posicao);

            $resultado = "";
            $resultado .= "Elemento: ".$celula->getElemento();

            if($celula->getProxima() != null){
                $resultado .= "<br> Proximo: ".$celula->getProxima()->getElemento();
            }else{
                $resultado .="<br> Proximo: null";
            }
            
            if($celula->getAnterior() != null){
                $resultado .= "<br> Anterior: ".$celula->getAnterior()->getElemento();    
            }else{
                $resultado .="<br> Anterior: null";
            }           

            return $resultado;
        }

    }