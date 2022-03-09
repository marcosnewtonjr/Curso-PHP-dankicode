<?php

    include ('exemplo.php');
    $exemplo = new Exemplo(); // Instância de objeto

    # $exemplo->$var1 = 'Olá!';
    // Não aparece pois foi definida como private

    $exemplo->var2 = 'Marcos';
    echo $exemplo->var2;

    echo "<hr>";

    $exemplo2 = new Exemplo();

    $exemplo2->var2 = 'Aylla';
    echo $exemplo2->var2;

    echo "<hr>";

    echo Exemplo::$var3;

    echo "<hr>";

    Exemplo::metodo3();

    echo "<hr>";

    $exemplo->setVar1('Marcos');
    echo $exemplo->pegarVar1();

    echo "<hr>";

    $exemplo2->setVar1('Newton');
    echo $exemplo2->pegarVar1();

?>