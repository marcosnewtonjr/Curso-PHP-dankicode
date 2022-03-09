<?php

    // Unindo 2 arrays

    $array01 = ['Marcos','Aylla'];
    $array02 = ['Camila','Maria Alice'];

    $arrayMerge = array_merge($array01, $array02);

    print_r($arrayMerge);

    echo "<hr>";

    // Interceção de arrays, verifica os itens de mesma chave e tras apenas o primeiro

    $array03 = ['pai'=>'Marcos','filha'=>'Aylla'];
    $array04 = ['mae'=>'Camila','filha'=>'Maria Alice'];

    $arrayIntersect = array_intersect_key($array03,$array04);

    print_r($arrayIntersect);

    echo "<hr>";

    // Aplicar uma função para cada item de um array

    $array05 = ['<p>Marcos</p>','<strong>Newton</strong>','<h1>Olá</h1>'];

    # print_r($array05);

    $arrayMap = array_map('strip_tags',$array05); // O primeiro parâmetro chama a função que desaja aplicar, e o segundo o array

    print_r($arrayMap);

?>