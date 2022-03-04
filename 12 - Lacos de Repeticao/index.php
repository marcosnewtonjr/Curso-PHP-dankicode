<?php

    // echo 'Olá!';
    // echo 'Olá!';
    // echo 'Olá!';
    // echo 'Olá!';
    // echo 'Olá!';

    // Laço de repecição for

    for($count1 = 0; $count1 < 5; $count1++) {
        echo 'Ola! <br>';
        echo $count1;
        echo '<hr>';
    }

    // Laço de repetição while - Executa o codigo após realizar verificação

    $count2 = 5;
    
    while ($count2 > 0){
        echo 'Olá <br>';
        echo $count2;
        echo '<hr>';
        $count2--;
    }

    // Laço de repetição do while - Executa o codigo depois realiza a verificação

    $count3 = 0;

    do {
        echo 'Olá <br>';
        echo $count3;
        echo '<hr>';
        $count3++;
    } while ($count3 < 5);
?>