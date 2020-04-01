<?php

    include_once("class/Fila.php");

    $fila = new Fila();

    for($i=1;$i<11;$i++){
        echo "Enfileirando: ".($i*5)."<br>";
        $fila->enfileirar($i*5);
    }

    echo "<br>";

    $fila->exibirTodosElementos();
    echo "<br>Primeiro elemento da fila: ".$fila->primeiroDafila()."<br>";

    echo "<br>";

    if($elemento = $fila->desenfileirar()){
        echo "Retirado primeiro elemento da fila:".$elemento."<br>";
    }else{
        echo "Fila está vazia!<br>";
    }

    $fila->exibirTodosElementos();
    echo "<br>Primeiro elemento da fila: ".$fila->primeiroDafila()."<br>";

    echo"<br>Adcionando novo elemento na fila: 100<br>";
    $fila->enfileirar(100);

    $fila->exibirTodosElementos();
    echo "<br>Primeiro elemento da fila: ".$fila->primeiroDafila()."<br>";

    