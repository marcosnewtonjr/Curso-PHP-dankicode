<?php

    // Existem diversar funções nativas do PHP
    // Para ter acesso a elas, a melhor maneira é acessar a pagina de documentos na pagina php.net

    // Além disto podemos criar nossas próprias funções:

    function mostarNome($nome,$idade) {
        echo "<h1> Nome é: $nome</h1>";
        echo "<h1> Idade é $idade</h1>";
    }

    mostarNome('Marcos Newton',30);

    // Quando utilizamos parâmentros em nossas funções criadas, podemos definir um valor padrão caso ela não seja definida

    function calculadora($n1 = 10,$n2 = 5) {
        echo ($n1+$n2);
    }

    calculadora();

    // Podemos utilizar as funções para nos retornar algo

    function verdade() {
        return true;
    }

    $var = verdade(); // Retorna um valor dentro de uma variável

    // Podemos retornar qualquer coisa, inclusive uma string

    function retornarString() {
        return 'Marcos Newton';
    }

    echo retornarString(); // Retornando uma string dentro da função echo

?>