<?php

    $nome = 'Newton';

    // Criando condicionais que verificam igualdade

    switch ($nome) {
        case 'Marcos':
            echo 'Minha variável é Marcos';
            break; // Encerra a verificação e pula para o próximo bloco de código
        case 'Newton':
            echo 'Minha variável é Newton';
            break; // Encerra a verificação e pula para o próximo bloco de código
    }

    echo "<hr>";

    // Saltando uma condição utilizando o continue

    for ($i = 0; $i < 10; $i++) {
        if ($i == 3 || $i == 5 || $i == 7) // Caso a condicional if ou for tenha apenas uma linha de código abaixo, não precisa abrir chaves
            continue;
        echo "$i <hr>";
    }

?>