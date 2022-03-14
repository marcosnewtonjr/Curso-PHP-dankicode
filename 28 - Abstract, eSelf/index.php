<?php

    // A classe abstract só ser para ser herdada, não se pode fazer uma nova instancia dela.

    abstract class teste {
        public function func1() {
            echo 'Chamando função 1';
        }
    }

    // Não funciona
    # $classAbstract = new teste;
    # $classAbstract->func1();

    class Principal extends teste {

    }

    $principal = new Principal;
    $principal->func1();

?>