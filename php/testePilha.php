<?php

    include_once("class/Pilha.php");

    $pilha = new Pilha();
   
    for($i=1;$i<11;$i++){
        echo "Empilhando: ".($i*2)."<br>";
        $pilha->empilhar($i*2);
    }

    echo "<br>";

    $pilha->exibirTodosElementos();

    echo "<br>Topo da pilha: ".$pilha->topoDaPilha()."<br>";

    echo "<br>Retirando topo da pilha: ".$pilha->desempilhar();

    echo "<br>";

    $pilha->exibirTodosElementos();

    echo "<br>Topo da pilha: ".$pilha->topoDaPilha()."<br>";

    echo "<br>Empilhando novo elemento: 50:<br>";

    $pilha->empilhar(50);

    $pilha->exibirTodosElementos();

    echo "<br>Topo da pilha: ".$pilha->topoDaPilha()."<br>";