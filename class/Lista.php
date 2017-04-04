<?php

    include_once("EstruturaDeDados.php");

    class Lista extends EstruturaDeDados{

        function __construct(){
            parent:: __construct();
        }
        
        public function adcionaPorPosicao($posicao, $elemento){

            if(!$this->estaVazia() && $this->tamanho - 1 > $posicao){

                for($i=$this->tamanho - 1;$i >= $posicao;$i --){
                    $this->elementos[$i+1] = $this->elementos[$i];
                }

                $this->elementos[$posicao] = $elemento;
                $this->tamanho++;
                return true;
            }

            return false;
        }
      
        
    }