<?php

    $conteudo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quia quod eveniet! Debitis eos eligendi accusamus officia illum cumque id dolorum quas vel vero? Eos officia asperiores sit molestias ut! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur nulla asperiores nisi optio itaque aliquid adipisci illo repudiandae iusto consectetur tenetur inventore quidem aperiam facere, earum quos veniam expedita magni?';

    // Recortar uma string

    echo substr($conteudo,0,20);

    echo "<hr>";

    // Quebrar uma string em uma array

    $nome = 'Marcos Newton Júnior Moreira Mendes';

    $arrayExplode = explode(' ',$nome); // O primeiro parâmetro serve para indicar onde será a quebra

    print_r($arrayExplode);

    echo "<hr>";

    // Junta uma array em uma string

    $arrayImplode = implode(' ',$arrayExplode);

    echo $arrayImplode;

    echo "<hr>";

    // Remove todas as tags HTML

    $textHTML = "<h1>Marcos</h1>";

    echo strip_tags($textHTML);

    echo "<hr>";

    // Exibe as tags HTML sem interpretar

    echo htmlentities($textHTML);

?>
