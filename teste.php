<?php

    include_once("class/Lista.php");
    include_once("class/Fila.php");
    include_once("class/Pilha.php");

    $lista = new Lista();
    $fila = new Fila();   
    $pilha = new Pilha();

    //Teste Lista
    for($i=0;$i<10;$i++){
        echo "Adcionando a lista: ".$i."<br>";
        $lista->adcionar($i);
    }

    echo "<br>Tamanho da lista:".$lista->tamanho()."<br>";

    $lista->exibirTodosElementos();  
    
    echo "<br>";

    if($lista->deletaPorElemento(2)){
        echo "<br>Item deletado com sucesso!<br>";
    }else{
        echo "<br>Item não encontrado!<br>";
    }

    echo "<br>Tamanho da lista:".$lista->tamanho()."<br>";
    
    $lista->exibirTodosElementos();  
    
    echo "<br>";

    if($lista->adcionaPorPosicao(3,100)){
        echo "<br>Item adcionado com sucesso!<br>";
    }else{
        echo "<br>Posicao inexistente!<br>";
    }

    echo "<br>Tamanho da lista:".$lista->tamanho()."<br>"; 
    $lista->exibirTodosElementos();

     

    //--------------------------------------------------------

    //Teste Fila 

    echo "<br><br>Teste com fila:<br><br>";

    for($i=1;$i<11;$i++){
        echo "Enfileirando: ".($i*5)."<br>";
        $fila->enfileirar($i*5);
    }

    echo "<br>Primeiro da fila: ".$fila->primeiroDafila()."<br>";

    if($elemento = $fila->desenfileirar()){
        echo "Retirado primeiro elemento da fila:".$elemento."<br>";
    }else{
        echo "Fila está vazia!<br>";
    }

    echo "Primeiro da fila: ".$fila->primeiroDafila()."<br>";

    //---------------------------------------------------------

    //Teste Pilha

    echo "<br><br> Teste com pilha:<br><br>";
   
    for($i=1;$i<11;$i++){
        echo "Empilhando: ".($i*2)."<br>";
        $pilha->empilhar($i*2);
    }

    echo "<br>Topo da pilha: ".$pilha->topoDaPilha();

    echo "<br>Retirando topo da pilha: ".$pilha->desempilhar();

    echo "<br>Topo da pilha: ".$pilha->topoDaPilha();

    //----------------------------------------------------------
