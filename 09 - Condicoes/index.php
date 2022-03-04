<?php

    $variavel1 = 'Marcos';
    $variavel2 = 'Marcos';

    if ($variavel1 == $variavel2) {
        echo "<div style='width: 300px;height: 300px; background-color: red;'></div>"; // Deve-se diferencias as aspas para não ter conflito
    } else if ($variavel1 != $variavel2) {
        echo 'As variáveis são diferentes';
    } else {
        echo 'Falso';
    }

?>