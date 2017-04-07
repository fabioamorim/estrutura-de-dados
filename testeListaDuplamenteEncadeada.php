<?php

    include("class/ListaDuplamenteEncadeada.php");

    $lista = new ListaDuplamenteEncadeada();

    for($i=0;$i<5;$i++){
        $lista->adcionar("Elemento ".($i+1));
    }

    echo $lista->exibeElementos()."<br>";

    echo "<br>Detalhes de cada elemento: <br><br>";

    for($i=0;$i<5;$i++){        
        echo $lista->exibeElementoCompleto($i)."<br><br>";
    }

    echo "inserindo novo elemento no final da lista: <br>";
    $lista->adcionaFim("Elemento 6");
    echo $lista->exibeElementos()."<br><br>";

    echo "inserindo novo elemento no em uma posicao definida: 2 <br>";
    $lista->adcionaPosicao("Elemento 100",2);
    echo $lista->exibeElementos()."<br><br>";

    for($i=0;$i<5;$i++){        
        echo $lista->exibeElementoCompleto($i)."<br><br>";
    }

    echo $lista->exibeElementos()."<br><br>";
    echo "removendo elemento do comeco da lista: <br>";
    $lista->removeComeco();
    echo $lista->exibeElementos()."<br><br>";

    echo "removendo elemento do fim da lista: <br>";
    $lista->removeFim();
    echo $lista->exibeElementos()."<br><br>";

    echo "removendo elemento de uma posicao definida: 3 <br>";
    $lista->removePosicao(2);
    echo $lista->exibeElementos()."<br><br>";

    for($i=0;$i<5;$i++){        
        echo $lista->exibeElementoCompleto($i)."<br><br>";
    }