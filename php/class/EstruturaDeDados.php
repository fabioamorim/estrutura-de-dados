<?php

    class EstruturaDeDados{

        protected $elementos = array();
        protected $tamanho;

        function __construct(){
            $this->tamanho = 0;
        }


        public function adcionar($elemento){
            $this->elementos[$this->tamanho] = $elemento;
            $this->tamanho ++;
        }


        public function deletaPorElemento($elemento){

            if($this->estaVazia()){
                return false;
            }

            $posicao = $this->buscaPorElemento($elemento);

            if(!is_null($posicao)){
                for($i = $posicao; $i < ($this->tamanho - 1);$i++){
                    $this->elementos[$i] = $this->elementos[$i+1];
                }

                $this->elementos[$this->tamanho -1] = null;
            }else{
                return false;
            }

            $this->diminuiArray();
            $this->tamanho--;

            return true;
        }

        public function deletaPorPosicao($posicao){

            if(!($posicao < $this->tamanho() && $posicao >= 0)){
                return false;
            }

            for($i=$posicao;$i<$this->tamanho-1;$i++){
                $this->elementos[$i] = $this->elementos[$i+1];
            }

            $this->tamanho --;
            return true;
        }


        public function buscaPorElemento($elemento){
           
            $contador = 0;

            foreach($this->elementos as $values){

                if($values == $elemento){
                    return $contador;
                }

                 $contador++;
            }

            return null;
        }

        public function buscaPorPosicao($posicao){
            if($posicao > $this->tamanho){
                return null;
            }

            return $this->elementos[$posicao];
        }

        private function diminuiArray(){
            $array = array();
            $i = 0;
            foreach($this->elementos as $value){
                if(!is_null($value)){
                    $array[$i] = $value;
                    $i++;
                }
            }

            $this->elementos = $array;
        }

        public function tamanho(){
            return $this->tamanho;
        }
 
        public function exibirTodosElementos(){
            if($this->tamanho > 0){

                echo "[";

                for($i = 0; $i< $this->tamanho();$i++){
                    if($i>=0 && $i < $this->tamanho - 1){
                        echo $this->elementos[$i].", ";
                    }else{
                        echo $this->elementos[$i];
                    }
                     
                }
            }else{
                echo "Não há elementos na lista.<br>";
            }

            echo " ]";
        }

        public function estaVazia(){

            if($this->tamanho < 1){
                return true;
            }

            return false;
        }

    }