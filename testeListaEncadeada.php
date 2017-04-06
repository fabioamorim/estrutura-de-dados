<?php

    include("class/ListaEncadeada.php");

    $lista = new ListaEncadeada();

    for($i = 10; $i > 0; $i--){
        echo "Adcionando  Elemento: ".$i."<br>";
        $lista->adcionar("Elemento ".$i);
        echo $lista->exibeElementos()."<br>";    
    }
    
    echo "<br>";

    echo "Tamanho da lista: ".$lista->tamanho()."<br>";

    echo "Remover elemento do começo: ";
    $lista->removeComeco();

    echo "<br>";

    echo $lista->exibeElementos()."<br>";

    echo "<br>";

    echo "Tamanho da lista: ".$lista->tamanho()."<br>";

    echo "<br>";

    echo "Buscar elemento na posicao 2: ".$lista->buscar(2)."<br>";

    echo "Buscar elemento na posicao inexistente : ".$lista->buscar(50)."<br>";

    echo "<br>";

    echo "Adciona elemento no fim: <br>";
    $lista->adcionaFim("Elemento fim");
    echo $lista->exibeElementos()."<br>";

    echo "<br>";

    echo "Adciona elemento na posicao 3: <br>";
    $verifica = $lista->adcionaPosicao("Elmento novo", 3);
    echo $lista->exibeElementos()."<br>";


