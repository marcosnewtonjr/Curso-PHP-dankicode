<?php

    $arr1 = ['Marcos','Camila','Aylla','Maria Alice'];

    foreach ($arr1 as $key => $value) {
        echo "$key => $value <hr>";
    }

    echo "<br>";

    // Podemos personalizar chaves das arrays
    // Podemos observar que os valores que não possuem chave definida, tem sua chave iniciada no zero "0"

    $arr2 = ['Pai'=>'Marcos','Mãe'=>'Camila','Aylla','Maria Alice'];

    foreach ($arr2 as $key => $value) {
        echo "$key => $value <hr>";
    }

    echo "<br>";

    // Além do ForEach podemos utilizar o For para ter o mesmo resultado
    // Entretanto, não consiguimos tratar chaves personalizadas com este método

    $arr3 = ['Marcos','Camila','Aylla','Maria Alice'];

    $total = count($arr3); // Função para contar quantos itens temos dentro da array

    for ($i = 0; $i < $total; $i++) {
        echo "$i => $arr3[$i] <hr>";
    }

?>