<?php

    // Trabalhando com datas

    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d/m/Y H:i:s');

    echo $date;

?>

<?php

    include('header.php'); // Incluindo uma parte do código de outra página

?>

<h2>Aqui é meu corpo</h2>

<?php

    include('footer.php'); // Incluindo uma parte do código de outra página

?>