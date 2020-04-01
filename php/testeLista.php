<?php

    include_once("class/Lista.php");

    $lista = new Lista();

    for($i=0;$i<10;$i++){
        echo "Adcionando a lista: ".$i."<br>";
        $lista->adcionar($i);
    }

    echo "<br>Tamanho da lista:".$lista->tamanho()."<br>";

    $lista->exibirTodosElementos();  
    
    echo "<br>";

    if($lista->deletaPorElemento(2)){
        echo "<br>Elemento da posicao 2 deletado com sucesso!<br>";
    }else{
        echo "<br>IElemento não encontrado!<br>";
    }

    echo "<br>Tamanho da lista:".$lista->tamanho()."<br>";
    
    $lista->exibirTodosElementos();  
    
    echo "<br>";

    if($lista->adcionaPorPosicao(3,100)){
        echo "<br>Elemento 100 adcionado na posicao 3 com sucesso!<br>";
    }else{
        echo "<br>Posicao inexistente!<br>";
    }

    echo "<br>Tamanho da lista:".$lista->tamanho()."<br>"; 
    $lista->exibirTodosElementos();