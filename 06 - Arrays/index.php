<?php

    /*
    $nome1 = 'Marcos'
    $nome2 = 'Camila'
    $nome3 = 'Aylla'
    $nome4 = 'Maria Alice'
    */

    $nome = array('Marcos','Camila','Aylla','Maria Alice');

    echo $nome[0];
    echo $nome[1];
    echo $nome[2];
    echo $nome[3];

    // Também podemos declarar arrays da seguinte maneira:

    $pet = ['Bolota','Candoca','Mel','Princesa'];

    // Além disto podemos declarar vários tipos de variaveis dentro de uma array:

    $variaveis = ['Marcos',30,1.80,false];

    // Podemos também declarar o indice por uma string:

    $informacao['nome'] = 'Marcos';
    $informacao['idade'] = '30';
    $informacao['cidade'] = 'Pará de Minas';

    echo $informacao['nome'];
    echo $informacao['idade'];
    echo $informacao['cidade'];

?>