<?php

    $var1 = '10';
    $var2 = 10;

    //Confere se o valor é igual

    if($var1 == $var2) {
        echo 'Igual';
    } else {
        echo 'Diferente';
    }

    // Confere se o valor é diferente

    if($var1 != $var2) {
        echo 'Diferente';
    } else {
        echo 'Igual';
    }

    // Os casos acima apenas verificam o valor, caso seja necessário verificar o tipo da variavel também devemos incluir mais um sinal de igual (===) ou (!==)

    if($var1 === $var2) {
        echo 'Igual';
    } else {
        echo 'Diferente';
    }

    if($var1 !== $var2) {
        echo 'Diferente';
    } else {
        echo 'Igual';
    }

?>