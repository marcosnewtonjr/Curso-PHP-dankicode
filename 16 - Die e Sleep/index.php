<?php

    // A função die para o código, ou seja, caso ela seja ativa o restante do programa não será executado

    $nome = 'Marcos';

    if($nome == 'Marcos') {
        echo 'Tudo certo! <hr>';
    } else {
        die();
    }

    // A função sleep coloca o servidor para dormir, atrasando a execução do código.
    // Quanto mais sleep são inseridos, eles são somandos e após passar o total do tempo, todo o código é exibido.

    sleep(2);
    echo 'Olá! ';

    sleep(2);
    echo 'Seja bem vindo!';

?>