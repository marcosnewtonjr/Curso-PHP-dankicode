<?php

    define('NOME','Marcos Newton');
    $idade = 30;

    echo 'Meu nome é '.NOME.' e tenho '.$idade.' anos.';

    // No caso de concatenar apenas variáveis, podemos utilizar aspas dupla sem chamar o ponto para ligar os elementos

    echo "Eu tenho $idade anos.";

    // Temos que tomar cuidade ao utilizar as aspas junto a tags HTML

    $classe = 'box';

    echo "<div class=\"$classe\">Meu conteúdo da div</div>";

?>