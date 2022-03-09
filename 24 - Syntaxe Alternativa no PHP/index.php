<?php

      $nome = 'Marcos';

    if ($nome == 'Marcos'):
        echo 'Verdade';
    endif;

    echo "<hr>";

    $contador = 0;

    while ($contador < 10):
        $contador++;
        echo "Oi <br>";
    endwhile;

    echo "<hr>";

    $variable = ['Marcos','Camila','Aylla','Maria Alice'];

    foreach ($variable as $key => $value): 
        echo "$value <br>";
    endforeach;

    echo "<hr>";

    for ($i=0; $i <= 10; $i++):
      echo "$i | ";
    endfor;

?>