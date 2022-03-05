<?php

    // Array single

    $arr = ['Marcos','Camila','Aylla','Maria Alice'];

    // Array multidimensionais

    $arr2 = [['Marcos','Camila'],['Aylla','Maria Alice']];

    echo $arr2[0][0];
    echo '<br>';
    echo $arr2[0][1];
    echo '<br>';
    echo $arr2[1][0];
    echo '<br>';
    echo $arr2[1][1];
    echo '<hr>';

    $arr3 = ['nome'=>['Marcos','Camila'],'idade'=>[30,33]];

    echo $arr3['nome'][0];
    echo '<br>';
    echo $arr3['nome'][1];
    echo '<br>';
    echo $arr3['idade'][0];
    echo '<br>';
    echo $arr3['idade'][1]
?>